<?php
class pricing_table_widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'Pricing-Table-Widget';
	}

	public function get_title() {
		return esc_html__( 'Pricing Table', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-price-table';
	}

	public function get_categories() {
		return [ 'basic' ];
	}


	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function render() {
    $settings = $this->get_settings_for_display();  
		?>

    <?php
    $this->start_controls_section(
      'section_title',
      [
        'label' => esc_html__( 'Customize Content', 'elementor-addon' ),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );


    $this->add_control(
      'currency',
      [
        'type' => \Elementor\Controls_Manager::SELECT,
        'label' => esc_html__( 'currency', 'textdomain' ),
        'options' => [
          '€' => esc_html__( '€', 'textdomain' ),
          'RS' => esc_html__( 'RS', 'textdomain' ),
          '$' => esc_html__( '$', 'textdomain' ),
           '£' => esc_html__( '£', 'textdomain' ),
            '₹' => esc_html__( '₹', 'textdomain' ),
             '¥' => esc_html__( '¥', 'textdomain' ),
        ],
        'default' => '$',
      ]
    );

   $this->add_control(
    'price',
      [
        'label' => esc_html__( 'Add Price', 'elementor-addon' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '1', 'elementor-addon' ),
      ]
  
    );



    $this->add_control(
      'Select Time Period',
      [
        'type' => \Elementor\Controls_Manager::SELECT,
        'label' => esc_html__( 'Select Time', 'textdomain' ),
        'options' => [
          'MONTHLY' => esc_html__( 'Monthly', 'textdomain' ),
          'YEAR' => esc_html__( 'Year', 'textdomain' ),
          'Two YEAR' => esc_html__( 'Two YEAR', 'textdomain' ),
        ],
        'default' => 'MONTH',
      ]
    );

    $this->add_control(
      'Select Plan',
      [
        'type' => \Elementor\Controls_Manager::SELECT,
        'label' => esc_html__( 'Select Plan', 'textdomain' ),
        'options' => [
          'Free' => esc_html__( 'Free', 'textdomain' ),
          'Basic' => esc_html__( 'Basic', 'textdomain' ),
          'Pro' => esc_html__( 'Pro', 'textdomain' ),
        ],
        'default' => 'Free',
      ]
    );

 
    $this->add_control(
    'Features',
      [
        'label' => esc_html__( 'Features', 'elementor-addon' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => esc_html__( 'Write info here', 'textdomain' ),
      ]
    );

    $this->add_control(
    'iconclass',
      [
        'label' => esc_html__( 'Icon Class', 'elementor-addon' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'ion-leaf', 'elementor-addon' ),
        'placeholder' => esc_html__( 'write class name', 'textdomain' ),
        'description' => esc_html__( 'https://bootsnipp.com/iconsearch?library=ionicons', 'textdomain' ),

       ]
    );

    $this->add_control(
        'content_section',

        [
            'label' => esc_html__( 'Content', 'elementor-currency-control' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            'default' => esc_html__( 'Select', 'elementor-addon' ),
         ]
    );

    $this->end_controls_section();

  

    $this->start_controls_section(
        'section_title_style',

        [
            'label' => esc_html__( 'Customize Styles', 'elementor-addon' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $this->add_control(
        'bgcolor',

          [
            'label' => esc_html__( 'Background Color', 'elementor-addon' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => esc_html__( '#80BB5F', 'elementor-addon' ),
          ]
    );

    $this->add_control(
        'textcolor',
        [
            'label' => esc_html__( 'Text Color', 'elementor-addon' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => esc_html__( '#fff', 'elementor-addon' ),
        ]
    );

    $this->add_control(
        'button bgcolor',
          [
            'label' => esc_html__( 'button Color', 'elementor-addon' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'default' => esc_html__( 'black', 'elementor-addon' ),
          ]
    );

    $this->add_control(
            'bordercolor',
            [
                'label' => esc_html__( 'Border Color', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
        'default' => esc_html__( '#fff', 'elementor-addon' ),
            ]
    );


    $this->end_controls_section();
?>

<style>

@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700);

.wrapper {
    font-family: 'Source Sans Pro', Arial, sans-serif;
    color: <?php echo $settings['textcolor']?>;
    text-align: left;
    font-size: 16px;
    margin: 30px 10px;
}

.wrapper img {
    position: absolute;
    left: 0;
    top: 0;
    height: 50%;
    z-index: -1;
}

.wrapper .plan {
    margin: 0 0.5%;
    width: 24%;
    padding-top: 10px;
    position: relative;
    float: left;
    overflow: hidden;
    background-color: #222f3d;
    border-radius: 8px;
}

.wrapper .plan:hover i,
.wrapper .plan.hover i {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
}

.wrapper * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
}

.wrapper header {
    color: <?php echo $settings['textcolor']?>;
}

.wrapper .plan-title {
    line-height: 60px;
    position: relative;
    margin: 0;
    padding: 0 20px;
    font-size: 1.6em;
    letter-spacing: 2px;
    font-weight: 700;
}

.wrapper .plan-title:after {
    position: absolute;
    content: '';
    top: 100%;
    left: 20px;
    width: 30px;
    height: 3px;
    background-color: <?php echo $settings['bordercolor'] ?>;
}

.wrapper .plan-cost {
    padding: 0 20px;
    margin: 0;
}

.wrapper .plan-price {
    font-weight: 400;
    font-size: 2.8em;
    margin: 10px 0;
    display: inline-block;
}

.wrapper .plan-type {
    opacity: 0.8;
    font-size: 0.7em;
    text-transform: uppercase;
}

.wrapper .plan-features {
    padding: 0 0 20px;
    margin: 0;
    list-style: outside none none;
    font-size: 0.9em;
}

.wrapper .plan-features li {
    padding: 8px 20px;
}

.wrapper .plan-features i {
    margin-right: 8px;
    color: rgba(255, 255, 255, 0.5);
}

.wrapper .plan-select {
    border-top: 1px solid rgba(0, 0, 0, 0.2);
    padding: 20px;
    text-align: center;
}

.wrapper .plan-select a {
    background-color: #156dab;
    color: #ffffff;
    text-decoration: none;
    padding: 12px 20px;
    font-size: 0.75em;
    font-weight: 600;
    border-radius: 8px;
    text-transform: uppercase;
    letter-spacing: 4px;
    display: inline-block;
}

.wrapper .plan-select a:hover {
    background-color: !important;
}

.wrapper .featured {
    margin-top: -10px;
    z-index: 1;
    border-radius: 8px;
    width: 60%;
    border: 2px solid <?php echo $settings['bordercolor'] ?>;
    background-color: <?php echo $settings['bgcolor'] ?>;
}

.wrapper .featured .plan-select {
    padding: 30px 20px;
}

.wrapper .featured .plan-select a {
    background-color: blue;
}
#a1{
    background-color: <?php echo $settings['button bgcolor'] ?> ;
}
@media only screen and (max-width: 767px) {
    .wrapper .plan {
        width: 49%;
        margin: 0.5%;
}

.wrapper .plan-title,
.wrapper .plan-select a {
-webkit-transform: translateY(1);
transform: translateY(0);
}

.wrapper .plan-select,
.wrapper .featured .plan-select {
padding: 20px;
}

.wrapper .featured {
margin-top: 0;
}

.wrapper .featured header {
line-height: 70px;
}

}

@media only screen and (max-width: 440px) {
    .wrapper .plan {
        margin: 0.5% 0;
        width: 100%;
    }
}
</style>
<div class="wrapper">
    <div class="plan featured">
        <header>

            <h4 class="plan-title">
                <?php echo $settings['Select Plan'] ?>
            </h4>

            <div class="plan-cost"><span class="plan-price"><?php echo $settings['price'] ?><?php echo $settings['currency'] ?></span><span class="plan-type">/<?php echo $settings['Select Time Period'] ?></span></div>

        </header>

        <ul class="plan-features">
          <?php
            $features = $settings['Features'];
            $featuresArray = explode("\n", $features);
            $iconclass = $settings['iconclass'];
            foreach ($featuresArray as $value) {
              echo "<li><i class='$iconclass'></i> $value</li>";
            }
          ?>
        </ul>

        <div class="plan-select" ><a href="" id="a1"> <?php echo $settings['content_section'] ?> </a></div>

    </div>
</div>


		<?php
	}
}

