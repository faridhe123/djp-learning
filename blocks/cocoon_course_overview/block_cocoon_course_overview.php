<?php
global $CFG;
require_once($CFG->dirroot. '/theme/edumy/ccn/block_handler/ccn_block_handler.php');
class block_cocoon_course_overview extends block_base
{
    // Declare first
    public function init()
    {
        $this->title = get_string('cocoon_course_overview', 'block_cocoon_course_overview');

    }

    // Declare second
    public function specialization()
    {
        // $this->title = isset($this->config->title) ? format_string($this->config->title) : '';
        global $CFG, $DB, $COURSE;
        include($CFG->dirroot . '/theme/edumy/ccn/block_handler/specialization.php');
        if (empty($this->config)) {
          $this->config = new \stdClass();

          # Ubah settingan awal
//          $this->config->title = 'Overview';
          $this->config->description['text'] = '
										<h4 class="subtitle"></h4>
                                        <p><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</span></p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4>Duration</h4>
                                        <p></p>
                                        <ul>
                                            <li>3 hr</li>
                                        </ul>
                                        <h4>Participant</h4>
                                        <p></p>
                                        <ul>
                                            <li>Educator</li>
                                            <li>Profession</li>
                                            <li>Wajib Pajak</li>
                                        </ul>
                                        <h4>Pre-Requisite</h4>
                                        <p></p>
                                        <ul>
                                            <li>Memahami dasar perpajakan</li>
                                            <li>Memahami dasar akuntansi</li>
                                        </ul>
                                        <ul class="list_requiremetn">
                                            <li>
                                                <p></p>
                                            </li>
                                        </ul>
									';
            $this->config->description['text'] = $COURSE->summary;
        }
    }

    function applicable_formats() {
      $ccnBlockHandler = new ccnBlockHandler();
      return $ccnBlockHandler->ccnGetBlockApplicability(array('course-view'));
    }



    public function get_content()
    {
        global $CFG, $DB;

        if ($this->content !== null) {
            return $this->content;
        }

        // Declare third
        $this->content         =  new stdClass;

        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}
        if(!empty($this->config->description)){$this->content->description = $this->config->description['text'];} else {$this->content->description = '';}



        $this->content->text = '
        <div class="cs_row_two">
          <div class="cs_overview">
            <h4 data-ccn="title" class="title">'. format_text($this->content->title, FORMAT_HTML, array('filter' => true)) .'</h4>
            <div data-ccn="description">'. format_text($this->content->description, FORMAT_HTML, array('filter' => true)) .'</div>
          </div>
        </div>';
        return $this->content;
    }
    public function html_attributes() {
      global $CFG;
      $attributes = parent::html_attributes();
      include($CFG->dirroot . '/theme/edumy/ccn/block_handler/attributes.php');
      return $attributes;
    }
}
