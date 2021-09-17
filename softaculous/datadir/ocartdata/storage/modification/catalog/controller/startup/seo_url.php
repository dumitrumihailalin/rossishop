<?php
class ControllerStartupSeoUrl extends Controller {
	public function index() {
		// Add rewrite to url class
		if ($this->config->get('config_seo_url')) {
			$this->url->addRewrite($this);
		}

		// Decode URL

			
			if (isset($this->request->get['_route_'])) {

			if (strpos($this->request->get['_route_'], '/page/') !== false) {
					$this->request->get['page'] = str_replace('/page/','',substr($this->request->get['_route_'], strpos($this->request->get['_route_'], '/page/')));	
					$this->request->get['_route_'] = str_replace('/page/'.$this->request->get['page'],'',$this->request->get['_route_']);


				}			
			
			$lquery = $this->db->query("SELECT * FROM " . DB_PREFIX . "language;");			
			foreach ($lquery->rows as $language) {
				if ((strpos($this->request->get['_route_'],$language['code'].'/')) === 0) {
					$this->session->data['language'] = $language['code']; 
					$this->language = new Language((VERSION >= '2.2.0.0')? $language['code'] : $language['directory']);
					$this->language->load((VERSION >= '2.2.0.0')? $language['code'] : $language['directory']); 
					$this->registry->set('language', $this->language); 
					$this->config->set('config_language_id', $language['language_id']); 					
					$this->request->get['_route_'] = substr( $this->request->get['_route_'], strlen($language['code'].'/'));
					
			        }
				}
			}
			
		if (isset($this->request->get['_route_'])) {

			$redirect_settings = $this->config->get('redirect_settings');
			if (isset($redirect_settings['redirectmanager'])) {
				$redirects = $this->config->get('redirect');
				if ($redirects) {
				foreach ($redirects as $redirectlink) {
						if ($redirectlink['title'] == $this->request->get['_route_']) {
								$this->request->get['_route_'] = $redirectlink['url'];							
							}
					}
				}
			}
			
			
			$parts = explode('/', $this->request->get['_route_']);

			// remove any empty arrays from trailing
			if (utf8_strlen(end($parts)) == 0) {
				array_pop($parts);
			}

			foreach ($parts as $part) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($part) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");


                // Journal Theme Modification
                if ($part && !$query->num_rows) {
                    $sql = "
                        SELECT CONCAT('journal_blog_category_id=', category_id) as query FROM " . DB_PREFIX . "journal3_blog_category_description
                        WHERE keyword = '" . $this->db->escape($part) . "'
                        UNION
                        SELECT CONCAT('journal_blog_post_id=', post_id) as query FROM " . DB_PREFIX . "journal3_blog_post_description
                        WHERE keyword = '" . $this->db->escape($part) . "'
                    ";
                    $query = $this->db->query($sql);
                }

                if (!$query->num_rows) {
                    $this->load->model('journal3/blog');
                    $journal_blog_keywords = $this->model_journal3_blog->getBlogKeywords();

                    if($part && is_array($journal_blog_keywords) && (in_array($part, $journal_blog_keywords))) {
                        $this->request->get['route'] = 'journal3/blog';
                        continue;
                    }
                }
                // End Journal Theme Modification
            

			$redirect_settings = $this->config->get('redirect_settings');
			if ((isset($redirect_settings['autoredirect'])) && (!($query->num_rows))) {
			$link = $this->db->escape($part);
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE store_id = 0 and keyword sounds like '" . $this->db->escape($part) . "'");
				if (($query->num_rows)) {
					$this->db->query("insert into " . DB_PREFIX . "autoredirect values ('".$link."','".$query->row['keyword']."',now());");
				}
			}
			
				if ($query->num_rows) {
					$url = explode('=', $query->row['query']);


                // Journal Theme Modification
                if ($url[0] == 'journal_blog_post_id') {
                    $this->request->get['journal_blog_post_id'] = $url[1];
                }

                if ($url[0] == 'journal_blog_category_id') {
                    $this->request->get['journal_blog_category_id'] = $url[1];
                }
                // End Journal Theme Modification
            
					if ($url[0] == 'product_id') {
						$this->request->get['product_id'] = $url[1];
					}

					if ($url[0] == 'category_id') {
						if (!isset($this->request->get['path'])) {
							$this->request->get['path'] = $url[1];
						} else {
							$this->request->get['path'] .= '_' . $url[1];
						}
					}

					if ($url[0] == 'manufacturer_id') {
						$this->request->get['manufacturer_id'] = $url[1];
					}

					if ($url[0] == 'information_id') {
						$this->request->get['information_id'] = $url[1];
					}

					if ($query->row['query'] && $url[0] != 'information_id' && $url[0] != 'manufacturer_id' && $url[0] != 'category_id' && $url[0] != 'product_id') {
						$this->request->get['route'] = $query->row['query'];
					}
				} else {
					

			if ($this->request->get['_route_'] ==  'wishlist') { $this->request->get['route'] =  'account/wishlist';
			} elseif ($this->request->get['_route_'] ==  'contact') { $this->request->get['route'] =  'information/contact';
			} elseif ($this->request->get['_route_'] ==  'account') { $this->request->get['route'] =  'account/account';
			} elseif ($this->request->get['_route_'] ==  'sitemap') { $this->request->get['route'] =  'information/sitemap';
			} elseif ($this->request->get['_route_'] ==  'manufacturer') { $this->request->get['route'] =  'product/manufacturer';
			} elseif ($this->request->get['_route_'] ==  'affiliates') { $this->request->get['route'] =  'affiliate/account';
			} elseif ($this->request->get['_route_'] ==  'special') { $this->request->get['route'] =  'product/special';
			} elseif ($this->request->get['_route_'] ==  'login') { $this->request->get['route'] =  'account/login';
			} elseif ($this->request->get['_route_'] ==  'logout') { $this->request->get['route'] =  'account/logout';
			} elseif ($this->request->get['_route_'] ==  'register') { $this->request->get['route'] =  'account/register'; }
			else {
				$this->request->get['route'] = 'error/not_found';
			}
			
			

					break;
				}
			}


                // Journal Theme Modification
                if (isset($this->request->get['journal_blog_post_id'])) {
                    $this->request->get['route'] = 'journal3/blog/post';
                } else if (isset($this->request->get['journal_blog_category_id'])) {
                    $this->request->get['route'] = 'journal3/blog';
                }
                // End Journal Theme Modification
            

			if (strpos($this->request->get['_route_'], 'tags/') !== false) {
					$this->request->get['route'] = 'product/search';
					$this->request->get['tag'] = str_replace('tags/','',$this->request->get['_route_']);
				}
			
			if (!isset($this->request->get['route'])) {
				if (isset($this->request->get['product_id'])) {
					$this->request->get['route'] = 'product/product';
				} elseif (isset($this->request->get['path'])) {
					$this->request->get['route'] = 'product/category';
				} elseif (isset($this->request->get['manufacturer_id'])) {
					$this->request->get['route'] = 'product/manufacturer/info';
				} elseif (isset($this->request->get['information_id'])) {
					$this->request->get['route'] = 'information/information';

			}
			}
			if (isset($this->request->get['route']) && $this->request->get['route'] == 'error/not_found') {if (true) {$this->db->query("insert into " . DB_PREFIX . "404s_report values ('".$this->db->escape($this->request->get['_route_'])."',now());");
				}
			}
		}
	}

	public function rewrite($link) {

                // Journal Theme Modification
                if (defined('JOURNAL3_ACTIVE')) {
                    $this->load->model('journal3/blog');
                    $is_journal3_blog = false;
                }
                // End Journal Theme Modification
            
		$url_info = parse_url(str_replace('&amp;', '&', $link));

		$url = '';

		$data = array();

		parse_str($url_info['query'], $data);

			$extendedseo = $this->config->get('extendedseo');
			if (isset($data['route']) && ($data['route'] == 'product/category') || ($data['route'] == 'product/manufacturer/info')) {$slash = true;}
			

		foreach ($data as $key => $value) {
			if (isset($data['route'])) {
				if (($data['route'] == 'product/product' && $key == 'product_id') || (($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id') || ($data['route'] == 'information/information' && $key == 'information_id')) {
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . (int)$value) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

					if ($query->num_rows && $query->row['keyword']) {
						$url .= '/' . $query->row['keyword'];

						unset($data[$key]);
					}

                // Journal Theme Modification
                } elseif ($key == 'journal_blog_post_id') {
                    $is_journal3_blog = true;
                    if ($journal_blog_keyword = $this->model_journal3_blog->rewritePost($value)) {
                        $url .= '/' . $journal_blog_keyword;
                        unset($data[$key]);
                    }
                } elseif ($key == 'journal_blog_category_id') {
                    $is_journal3_blog = true;
                    if ($journal_blog_keyword = $this->model_journal3_blog->rewriteCategory($value)) {
                        $url .= '/' . $journal_blog_keyword;
                        unset($data[$key]);
                    }
                } elseif (isset($data['route']) && $data['route'] == 'journal3/blog') {
                    if (!isset($data['journal_blog_post_id']) && !isset($data['journal_blog_category_id'])) {
                        $is_journal3_blog = true;
                    }
                // End Journal Theme Modification
            

			} elseif (isset($data['route']) && $data['route'] ==   'common/home') { $url .=  '/';
			} elseif (isset($data['route']) && $data['route'] ==   'account/wishlist' && $key != 'remove') { $url .=  '/wishlist';
			} elseif (isset($data['route']) && $data['route'] ==   'information/contact') { $url .=  '/contact';
			} elseif (isset($data['route']) && $data['route'] ==   'account/account') { $url .=  '/account';
			} elseif (isset($data['route']) && $data['route'] ==   'information/sitemap') { $url .=  '/sitemap';
			} elseif (isset($data['route']) && $data['route'] ==   'product/manufacturer') { $url .=  '/manufacturer';
			} elseif (isset($data['route']) && $data['route'] ==   'affiliate/account') { $url .=  '/affiliates';
			} elseif (isset($data['route']) && $data['route'] ==   'product/special' && $key != 'page' && $key != 'sort' && $key != 'limit' && $key != 'order') { $url .=  '/special';
			} elseif (isset($data['route']) && $data['route'] ==   'account/login') { $url .=  '/login';
			} elseif (isset($data['route']) && $data['route'] ==   'account/logout') { $url .=  '/logout';
			} elseif (isset($data['route']) && $data['route'] ==   'account/register') { $url .=  '/register';
			

			} elseif ($data['route'] == 'product/search' && (isset($extendedseo['seotags'])) && ($key == 'filter_tag' || $key == 'tag')) {
						$url .= '/tags/' . $value;
						unset($data[$key]);
			
				} elseif ($key == 'path') {
					$categories = explode('_', $value);

					foreach ($categories as $category) {
						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = 'category_id=" . (int)$category . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

						if ($query->num_rows && $query->row['keyword']) {
							$url .= '/' . $query->row['keyword'];
						} else {
							$url = '';

							break;
						}
					}

					unset($data[$key]);
				}
			}
		}


                // Journal Theme Modification
                if (defined('JOURNAL3_ACTIVE')) {
                    if ($is_journal3_blog && $this->model_journal3_blog->getBlogKeyword()) {
                        $url = '/' . $this->model_journal3_blog->getBlogKeyword() . $url;
                    }
                }
                // End Journal Theme Modification
            

			$seopagination = $this->config->get('seopagination');				
			if (isset($key) && $key == 'page' && $url && (isset($seopagination['pagination']))) {
						$url .= '/page/' . $value;
						unset($data[$key]);
					}
			

			if (isset($slash)&& (isset($extendedseo['slash'])) && ($slash)) {$url = $url.'/'; $slash = false;}
			
		if ($url) {

				$squery = $this->db->query("SELECT `value` FROM `" . DB_PREFIX . "setting` WHERE `key` = 'config_language'");
				$mlseo = $this->config->get('mlseo');				
				if (isset($this->session->data['language']) && (isset($mlseo['subfolder'])) && (strpos($link, 'language') == false) && (strpos($link, 'currency') == false) && ($this->session->data['language'] <> $squery->row['value']) && (strpos($link, 'blog') == false)) {$url = '/'.$this->session->data['language'].$url;}
			
			unset($data['route']);

			$query = '';

			if ($data) {
				foreach ($data as $key => $value) {
					$query .= '&' . rawurlencode((string)$key) . '=' . rawurlencode((is_array($value) ? http_build_query($value) : (string)$value));
				}

				if ($query) {
					$query = '?' . str_replace('&', '&amp;', trim($query, '&'));
				}
			}

			return $url_info['scheme'] . '://' . $url_info['host'] . (isset($url_info['port']) ? ':' . $url_info['port'] : '') . str_replace('/index.php', '', $url_info['path']) . $url . $query;
		} else {
			return $link;
		}
	}
}
