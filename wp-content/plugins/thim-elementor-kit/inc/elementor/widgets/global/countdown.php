<?php

namespace Elementor;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Thim_EL_Kit\Custom_Post_Type;

defined( 'ABSPATH' ) || exit;

class Thim_Ekit_Widget_Countdown extends Widget_Base {

	public function get_name() {
		return 'thim-ekits-countdown';
	}

	public function get_categories() {
		return array( \Thim_EL_Kit\Elementor::CATEGORY );
	}

	public function get_title() {
		return esc_html__( 'CountDown', 'thim-elementor-kit' );
	}

	public function get_icon() {
		return 'thim-eicon eicon-countdown';
	}

	protected function register_controls() {
		$this->start_controls_section(
			'section_date',
			array(
				'label' => esc_html__( 'Date', 'thim-elementor-kit' ),
			)
		);
		$this->add_control(
			'date_end',
			[
				'label' => esc_html__( 'Date End', 'thim-elementor-kit' ),
				'type'  => Controls_Manager::DATE_TIME,
			]
		);
		$this->end_controls_section();

		$this->register_controls_label();
		$this->register_controls_style_item();
	}

	protected function register_controls_label() {
		$this->start_controls_section(
			'section_label',
			array(
				'label' => esc_html__( 'Label', 'thim-elementor-kit' ),
			)
		);
		$this->add_control(
			'label_days',
			[
				'label'       => esc_html__( 'Days', 'thim-elementor-kit' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'd', 'thim-elementor-kit' ),
				'placeholder' => esc_html__( 'Days', 'thim-elementor-kit' ),
			]
		);

		$this->add_control(
			'label_hours',
			[
				'label'       => esc_html__( 'Hours', 'thim-elementor-kit' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'h', 'thim-elementor-kit' ),
				'placeholder' => esc_html__( 'Hours', 'thim-elementor-kit' ),
			]
		);

		$this->add_control(
			'label_minutes',
			[
				'label'       => esc_html__( 'Minutes', 'thim-elementor-kit' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'm', 'thim-elementor-kit' ),
				'placeholder' => esc_html__( 'Minutes', 'thim-elementor-kit' ),
			]
		);

		$this->add_control(
			'label_seconds',
			[
				'label'       => esc_html__( 'Seconds', 'thim-elementor-kit' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 's', 'thim-elementor-kit' ),
				'placeholder' => esc_html__( 'Seconds', 'thim-elementor-kit' ),
			]
		);
		$this->end_controls_section();
	}

	protected function register_controls_style_item() {
		$this->start_controls_section(
			'section_item_style',
			array(
				'label' => esc_html__( 'Style Item', 'thim-elementor-kit' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);
		$this->add_control(
			'label_view',
			array(
				'label'     => esc_html__( 'Label View', 'thim-elementor-kit' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'inline',
				'options'   => array(
					'inline' => 'Inline',
					'block'  => 'Block',
				),
				'selectors' => array(
					'{{WRAPPER}} .countdown-label' => 'display: {{VALUE}}',
				),
			)
		);
		$this->add_responsive_control(
			'align',
			array(
				'label'     => esc_html__( 'Alignment', 'thim-elementor-kit' ),
				'type'      => Controls_Manager::CHOOSE,
				'options'   => array(
					'flex-start' => array(
						'title' => esc_html__( 'Left', 'thim-elementor-kit' ),
						'icon'  => 'eicon-text-align-left',
					),
					'center'     => array(
						'title' => esc_html__( 'Center', 'thim-elementor-kit' ),
						'icon'  => 'eicon-text-align-center',
					),
					'flex-end'   => array(
						'title' => esc_html__( 'Right', 'thim-elementor-kit' ),
						'icon'  => 'eicon-text-align-right',
					),
				),
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .thim-ekits-countdown-wrapper' => 'justify-content: {{VALUE}}',
				),
			)
		);

		$this->add_control(
			'background_color',
			array(
				'label'     => esc_html__( 'Background Color', 'thim-elementor-kit' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .countdown-item' => 'background-color: {{VALUE}}',
				),
			)
		);

		$this->add_responsive_control(
			'item_width',
			array(
				'label'     => esc_html__( 'Min Width', 'thim-elementor-kit' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => array(
					'px' => array(
						'max' => 500,
					),
				),
				'selectors' => array(
					'{{WRAPPER}} .countdown-item' => 'min-width: {{SIZE}}px;',
				),
				'condition' => array(
					'label_view' => 'block',
				),
			)
		);

		$this->add_responsive_control(
			'item_space',
			array(
				'label'     => esc_html__( 'Spacing', 'thim-elementor-kit' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => array(
					'px' => array(
						'max' => 100,
					),
				),
				'selectors' => array(
					'{{WRAPPER}} .thim-ekits-countdown-wrapper' => 'gap: {{SIZE}}px;',
				),
			)
		);

		$this->add_responsive_control(
			'item_padding',
			array(
				'label'      => esc_html__( 'Padding', 'thim-elementor-kit' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', 'em' ),
				'selectors'  => array(
					'{{WRAPPER}} .countdown-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			array(
				'name'     => 'item_border',
				'label'    => esc_html__( 'Border', 'thim-elementor-kit' ),
				'selector' => '{{WRAPPER}} .countdown-item',
			)
		);

		$this->add_responsive_control(
			'button_border_radius',
			array(
				'label'      => esc_html__( 'Border Radius', 'thim-elementor-kit' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', 'em', '%' ),
				'selectors'  => array(
					'{{WRAPPER}} .countdown-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);

		$this->add_control(
			'heading_digits_style',
			array(
				'label'     => esc_html__( 'Digits', 'thim-elementor-kit' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			)
		);

		$this->add_control(
			'digits_color',
			array(
				'label'     => esc_html__( 'Color', 'thim-elementor-kit' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .countdown-digits' => 'color: {{VALUE}}',
				),
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'     => 'digits_typography',
				'selector' => '{{WRAPPER}} .countdown-digits',
			)
		);

		$this->add_control(
			'heading_label_style',
			array(
				'label'     => esc_html__( 'Label', 'thim-elementor-kit' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			)
		);

		$this->add_control(
			'label_color',
			array(
				'label'     => esc_html__( 'Color', 'thim-elementor-kit' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .countdown-label' => 'color: {{VALUE}}',
				),
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'     => 'label_typography',
				'selector' => '{{WRAPPER}} .countdown-label',
			)
		);

		$this->add_responsive_control(
			'label_margin',
			array(
				'label'      => esc_html__( 'Margin', 'thim-elementor-kit' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', 'em' ),
				'selectors'  => array(
					'{{WRAPPER}} .countdown-label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);

		$this->end_controls_section();
	}

	protected function render_countdown_item( $label ) {
		$settings = $this->get_settings_for_display();
		$string   = '<div class="countdown-item"><span class="countdown-digits countdown-' . $label . '">00</span>';
		$string   .= '<span class="countdown-label">' . $settings[ 'label_' . $label ] . '</span>';
		$string   .= '</div>';

		return $string;
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$date_end = $settings['date_end'];
		if ( $date_end ) :
			if ( ! empty( $settings['heading_text'] ) ) {
				echo '<div class="thim-ekits-heading-countdown">' . $settings['heading_text'] . '</div>';
			}
			?>
			<div class="thim-ekits-countdown-wrapper" data-date_end="<?php
			echo strtotime( $date_end ); ?>">
				<?php
				$list_labels = [ 'days', 'hours', 'minutes', 'seconds' ];
				foreach ( $list_labels as $label ) {
					echo wp_kses_post( $this->render_countdown_item( $label ) );
				}
				?>
			</div>
		<?php
		endif;
	}

}
