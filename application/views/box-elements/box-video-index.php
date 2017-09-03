<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * The template for displaying the Headline News
 *
 * Displays all of the Content- Videos right element.
 *
 * @package Codeigniter
 * @subpackage Tamtv Template
 * @author Vicky Nitinegoro <pkpvicky@gmail.com>
 * @since Tamtv 1.0
 */
$box = $this->themes->get('box-video-index');

$value = json_decode($box->meta_value);

if( $this->posts->get_type('video', 4, 0, 'result') ) :
?>
<section class="box-video-index">
	<div class="block-box">
		<h3 class="featured-heading"> <?php echo $box->meta_name ?> </h3> 
		<div class="line"></div>
	</div>
	<div class="box-video-thumbnail">
		<div class="video-thumbnail">
			<?php foreach( $this->posts->get_type('video', $value->limit, 0, 'result') as $row) : ?>
			<div class="video-item">
				<div class="video-cover">
					<a href="<?php echo $this->posts->permalink($row->ID) ?>" title="<?php echo $row->post_title; ?>">
						<img src="<?php echo $this->posts->get_thumbnail($row->image, 'x-small'); ?>" alt="<?php echo $row->post_title; ?>">
					</a>
					<div class="video-icon">
						<img src="<?php echo base_url("public/image/site/video-icon.png") ?>" alt="<?php echo $row->post_title; ?>">
					</div>
				</div>
				<div class="video-title">
					<a href="<?php echo $this->posts->permalink($row->ID) ?>" title="<?php echo $row->post_title; ?>"><?php echo $row->post_title; ?></a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php
endif;
/* End of file box-video-index.php */
/* Location: ./application/views/box-elements/box-video-index.php */