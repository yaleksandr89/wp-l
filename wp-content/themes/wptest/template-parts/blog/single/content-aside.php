<div class="post-full">
	<?php $project = get_field( 'portfolio_project' ); ?>
    <table class="post-project-info">
        <tbody>
        <tr>
            <td class="post-project-info-title">Project</td>
            <td><?= $project->post_title ?></td>
        </tr>
        <tr>
            <td class="post-project-info-title">Creation date</td>
            <td><?= get_date_from_gmt( get_the_time( 'Y-m-d H:i:s', $project->ID ), 'j F Y' ) ?></td>
        </tr>
        <tr>
            <td class="post-project-info-title">Link</td>
            <td><a href="<?= get_permalink( $project->ID ) ?>"><?= $project->post_title ?></a></td>
        </tr>
        <tr>
            <td class="post-project-info-title">Type work</td>
            <td><?php the_terms( $project->ID, 'type-work' ) ?></td>
        </tr>
        <tr>
            <td class="post-project-info-title">Client</td>
            <td><?php the_terms( $project->ID, 'clients' ) ?></td>
        </tr>
        </tbody>
    </table>
    <h1><?php the_title() ?></h1>
    <div><?php the_content() ?></div>
</div>