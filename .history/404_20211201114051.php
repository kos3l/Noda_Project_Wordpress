<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
			</header>

			<div class="page-wrapper">
				<div class="page-content">
                    <div class="container Error-container">
                        <div class="row errorRow">
                            <div class="col  p-5 d-flex flex-column justify-content-center align-items-center" >
                                <h1 class="pb-1">Sorry, page not found!</h1>
                                <p>An 404 Error happened, try going back to our home page and look again.</p>
                                <button class="contactBtn p-md-4 mt-4">
                                    <h3 class="px-3 mb-0">TAKE ME HOME</h3>
                                </button>
                            </div>
                        </div>
                    </div>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>