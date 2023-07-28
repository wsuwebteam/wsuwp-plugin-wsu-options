<div class="wsu-customizer-control-wsu-toggle">


	<div class="wsu-customizer-control-wsu-toggle__options">
	<?php foreach ( $this->choices as $value => $label ) : ?>
			<input
				id="<?php echo esc_attr( $input_id . '-radio-' . $value ); ?>"
				type="radio"
				<?php echo $describedby_attr; ?>
				value="<?php echo esc_attr( $value ); ?>"
				name="<?php echo esc_attr( $name ); ?>"
				<?php $this->link(); ?>
				<?php checked( $this->value(), $value ); ?>
				/>
			<label for="<?php echo esc_attr( $input_id . '-radio-' . $value ); ?>"><?php echo esc_html( $label ); ?></label>
	<?php endforeach; ?>
	</div>
	<?php if ( ! empty( $this->label ) ) : ?>
		<div class="wsu-customizer-control-wsu-toggle__label"><?php echo esc_html( $this->label ); ?></div>
	<?php endif; ?>
	<?php if ( ! empty( $this->description ) ) : ?>
	<div id="<?php echo esc_attr( $description_id ); ?>" class="wsu-customizer-control-wsu-toggle__description"><?php echo $this->description; ?></div>
	<?php endif; ?>
</div>
