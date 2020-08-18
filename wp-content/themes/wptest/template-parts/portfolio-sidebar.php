<?php $terms_type_work = get_terms( 'wptest-type-work' ); ?>
<?php if ( $terms_type_work ) : ?>
    <div class="aside-box">
        <div class="h2">Type work</div>
        <ul class="secondery-navigation">
			<?php foreach ( $terms_type_work as $term ) : ?>
                <li>
                    <a href="<?= get_term_link( $term->term_id ) ?>">
						<?= $term->name ?>
                    </a>
                </li>
			<?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php $terms_clients = get_terms( 'wptest-clients' ); ?>
<?php if ( $terms_clients ) : ?>
	<div class="aside-box">
		<div class="h2">Clients</div>
		<ul class="secondery-navigation">
			<?php foreach ( $terms_clients as $term ) : ?>
				<li>
					<a href="<?= get_term_link( $term->term_id ) ?>">
						<?= $term->name ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
<?php endif; ?>