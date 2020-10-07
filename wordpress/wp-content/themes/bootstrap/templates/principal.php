<?php
/**
 * Template Name: principal
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-cover' );
		}
	}

	?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://lh3.googleusercontent.com/LAN30ZnAbwg9BeWv59fv8B8L92IO5loht0pRzSLX2uYR2rIffwNKTzIqpg_PeWR4mfritlO2zw6vEkMQ3rAwlhKSoEgLSlKFltdHe7ej_192d0b4iw2ooKL0hKQOHOw4zVIV7cP4-IhllxwLAqrzKzSUoV9Uh10Sx2Sp0ZQlrwvECHhmXEzHUsvBPoVEOZyPKhMm9B6r5rro504NyxFYxeKvCF_04wpNvS2wumkbF-O5rO_5uIVlUb_JgAvuD1V8MXlpznqh3i6sMKjXytclpNKHK9DopG52Kuq_Bp6s6jwsk2hyc6UnJ3ff-2uFvm6ozIw3Dlg_1_z3qMHFXDZGQp1qPWMnB8kNsvZgx_ynb5mP0t7KhwxmIHObxGPppnUgMPmu6Wp59uPaMnNKalDMvQaN9HhlSlvfADYdMAv_dDSoPTwEJRstszr20E0TwP7LaM90TlUIiykHIBOpxZiLibLAuq-18iAXxlQGHfNV62v4YorJWkyvh-Mx_gAqNf8k7YSDZL14yoYD0s_-EjnKtCkFWh95yY_KiWHrW9FKI4p6TNCzW0_VTjfPftTr6UBHtLiTiK84jBPY9t5ZNeTeQ1vMtAGsn-5aVQwdV7xiXGnFYyT6yUhU50knRvuzNm1S6KrmX9TxmApXNRFAep5RhegiWTHvmWERNispZ2SciUnwbTw6q6a8dCIv8uJz=w959-h719-no?authuser=0" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://lh3.googleusercontent.com/1q0UGNEcQ3pbfaQ8wf_8jLd6XQ7NxjnJMntrzM3eWg328ou1CP1jzUlGgGQJ83QC6miIbeS686Acnm-UwPhbe8FazKfAp5RhwH_vb6lsbTmupnNCO0XqNlG1VTsjwaw4cIILEryp5Ppeq4Jj5SBaYUMjJS2ufyT5bnbEmo80xZkkJ4lQSpFSf316-6woCaFvt8mKgDSH-DH1y7qgkwOkh-T2Tpnu_7zey0CTSmlMZsYE4FWMbXXcIH1whlyubtt67nIeFcsAdO0_621qn73a2yuQZuNHXYWR2Msb3NsuCyxjg3WhwzZ1DA6x6dx_BxT_f9oqlkZtwySgIvAzA8AH-ahA3zcM52bfmKpFjzkkOtoh0bu9pKzs_lRI-BC0WQh_w7Va1wLJ_RUu4dSsMWwJL3NNNgl0iDPA5zfVSE3C2sXrn-Sf67eOF7-TVMjipmqG2FY7QJD0cDIe-L0vMyk9Rio8f-_IWZtUarTv29DHjwqXJUswuexL5A3bIqG_FwIjFswa-NqV-j0rggYXj6OerfLS0MVIeE4u_iet-DFQZu0r_eLwYTRyuwIThqnU5PQqoy6qUKSDgyYspS95lj84lIR__U7AQjMUuLb1P-YCn5WMEQbfvsJsKAJt6eUXa6BeBM8MH5AyoeQYA98FB1ZZQrEO1Ar45bWeKsV4aErCHVd_yY6EwEAxH-WJoxjW=w959-h719-no?authuser=0" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://lh3.googleusercontent.com/Q6mK0WpNGoplQrqntKZ3Be3-lEJbGkDU2idFmY6PLRA1e33rvsBGHVXJBi-QCczDYXqyr1sIPz-OKRZQcyONz984AFKf3Lo3-ZRaq-Ni6dNWGqbmI4Cy4UYG7evj0o54hQJrEN0HRXA0JUEwE1YrOq1M1EzQvBzkLHNz0krMj7odYR8SY62Uzemr6WvA2vjKRej9VrP8q7Vpo6AsWCmYVeKo760l9uyupLf-tdpRw7yevFFQEfTJLzzNApAfPJlbddKFIKOMHtoggTfx-WO6BCcUy09zwr8bFslsi4sI-E4dH9BANF6qfjKULmFXTlGdBt2BxS-qNmuQqAfedtO7IAWGzFK930JQ_AcFQjYHRUbuT4j8etZArNiBVQ6of_0IdZzuXqUiBtnU03vd87k1em1pxvhCVkgHaJFceRXNFarDwrjFK_3KAi-J8Rl6IRbQTYDJvshKZ5yMbg3BW_tFhhR7fe_pOvZMnTQwzFmy1aE90t1t33mtFhMUduafzY-hsbZyPrTlpsuRvfHKjSoXVfjpvdPvXEo2oTlzH4n3qI7EJbZ6N3WWw7VzDxlEb6XGsmbiQs2EyhqVK12oV_09jqmGADyJ4yXTzI_AeABIEzRpfxDzxwPNLqRS7FsBbgOE5KXYOHCDftwxuCti2enWsxY-TVGQGORNJJW2n1dfxDDOkAFKUvTNn7DwNYvF=w959-h719-no?authuser=0" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>

