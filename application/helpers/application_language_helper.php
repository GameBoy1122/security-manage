<?php if (!defined('BASEPATH'))
     exit('No direct script access allowed');

function getVariable($var, $key)
{
     $ci = &get_instance();
     $ci->load->library('session');

     $language = $ci->session->userdata("CURRENT_LANGUAGE");

     if (empty($language)) {
          $ci->session->set_userdata("CURRENT_LANGUAGE", "th");
          $language = $ci->session->userdata("CURRENT_LANGUAGE");
     }


     return ($language == "en") ? $var->{$key . '_en'} : $var->{$key . '_th'};
}


function getWording($page, $key)
{
     $ci = &get_instance();
     $ci->load->library('session');

     $configurations = array(
          'index_menu' => array(
               'th' => array(
                    'lng' => 'th',
                    'homepage' => 'หน้าแรก',
                    'aboutus' => 'เกี่ยวกับเรา',
                    'history' => 'ความเป็นมาของศรีกรุงวัฒนา',
                    'message' => 'สารจากประธานกรรมการ',
                    'directors' => 'คณะกรรมการ',
                    'businesses' => 'ธุรกิจของเรา',
                    'corporate' => 'การกำกับดูแลกิจการ',
                    'news' => 'ข่าวประชาสัมพันธ์',
                    'career' => 'ร่วมงานกับเรา',
                    'contact' => 'ติดต่อเรา',
                    'more_businesses' => 'ธุรกิจอื่นๆของเรา',
                    'link' => 'ลิงค์',
                    'view_more' => 'เพิ่มเติม',
                    'job_position' => 'ตำแหน่งงาน',
                    'tel' => 'โทร',
                    'email' => 'อีเมล',
                    'time' => 'เวลาทำการ',
                    'cookie' => "<div class='cookie-consent'>
          <p>เว็บไซด์นี้ใช้คุกกี้เพื่อช่วยให้ท่านได้รับประสบการณ์ที่ดีที่สุดบนเว็บไซด์ของเรา </p><span class='pointer' data-bs-toggle='modal' data-bs-target='#exampleModal' style='text-decoration: underline;cursor: pointer;'>ศึกษาข้อมูลเพิ่มเติม</span>
                    <form method='post'>
                      <button type='submit' name='accept-cookies'>ยอมรับ</button>
                    </form>
                </div>",
                    'business' => '<h3 style="color:#021437"><b>ธุรกิจ<span style="color:#3DB1E4">ของเรา</span></b></h3>',

               ),
               'en' => array(
                    'lng' => 'en',
                    'homepage' => 'Home',
                    'aboutus' => 'About us',
                    'history' => 'Advanced Security Mangement Programwattana History',
                    'message' => 'Message from the Chairman',
                    'directors' => 'Board of Directors',
                    'businesses' => 'Our Businesses',
                    'corporate' => 'Corporate Governance',
                    'news' => 'News',
                    'career' => 'Career',
                    'contact' => 'Contact us',
                    'more_businesses' => 'other our businesses',
                    'link' => 'Link',
                    'view_more' => 'View more',
                    'job_position' => 'Job position',
                    'tel' => 'Tel',
                    'email' => 'Email',
                    'time' => 'Time opening',
                    'cookie' => "<div class='cookie-consent'>
                    <p>This website uses cookies to ensure you get the best experience on our website.</p><span class='pointer' data-bs-toggle='modal' data-bs-target='#exampleModal-1' style='text-decoration: underline;cursor: pointer;'>Learn More</span>
                    <form method='post'>
                      <button type='submit' name='accept-cookies'>Accept</button>
                    </form>
                </div>",
                    'business' => '<h3 style="color:#021437"><b>Our <span style="color:#3DB1E4">Business</span></b></h3>',
               )
          ),
          'download' => array(
               'th' => array(
                    'items' => 'รายการ',
                    '' => '',
               ),
               'en' => array(
                    'items' => 'Items',
                    '' => '',
               ),
          ),

     );

     $language = $ci->session->userdata("CURRENT_LANGUAGE");

     if (empty($language)) {
          $ci->session->set_userdata("CURRENT_LANGUAGE", "th");
          $language = $ci->session->userdata("CURRENT_LANGUAGE");
     }

     return $configurations[$page][$language][$key];
}
