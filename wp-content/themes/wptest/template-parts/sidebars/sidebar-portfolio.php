<?php
$terms      = get_terms();
$type_works = [];
$clients    = [];
foreach ( $terms as $term ) {
	if ( 'type-work' === $term->taxonomy ) {
		$uniq_id_term = spl_object_id( $term );
		if ( isset( $uniq_id_term ) ) {
			$type_works[ 'id_obj-' . $uniq_id_term ] = [
				'id'   => $term->term_id,
				'name' => $term->name
			];
		}
	}
	if ( 'clients' === $term->taxonomy ) {
		$uniq_id_term = spl_object_id( $term );
		if ( isset( $uniq_id_term ) ) {
			$clients[ 'id_obj-' . $uniq_id_term ] = [
				'id'   => $term->term_id,
				'name' => $term->name
			];
		}
	}
}
?>
<aside class="layout-col layout-col-aside">
	<?php if ( $type_works ) : ?>
        <div class="aside-box">
            <div class="h2">Type work</div>
            <ul class="secondery-navigation">
				<?php foreach ( $type_works as $type_work ) : ?>
                    <li>
                        <a href="<?= get_term_link( $type_work['id'] ) ?>">
							<?= $type_work['name'] ?>
                        </a>
                    </li>
				<?php endforeach; ?>
            </ul>
        </div>
	<?php endif; ?>

	<?php if ( $clients ) : ?>
        <div class="aside-box">
            <div class="h2">Clients</div>
            <ul class="secondery-navigation">
				<?php foreach ( $clients as $client ) : ?>
                    <li>
                        <a href="<?= get_term_link( $client['id'] ) ?>">
							<?= $client['name'] ?>
                        </a>
                    </li>
				<?php endforeach; ?>
            </ul>
        </div>
	<?php endif; ?>
</aside>
