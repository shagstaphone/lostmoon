        <?php  global $data;?>
        <!--End main container-->
        <div class="clear"></div>
        <!--Footer-->
        </div>
        <div class="main_wrapper" style="background-color:#051f51; margin-bottom:20px !important; border-bottom:5px solid #000; border-top:1px solid #f5f5f5;">
        <div id="footer">
        	<div class=" container">
            	<div class="span-6">
						<?php if($data['footer_logo'] == true ) { ?>
                        <a href=""><img src="<?php echo stripslashes($data['footer_logo']); ?>" alt="Logo" /></a>
                        <?php } ?>
                	</div>
					<div class="span-6">
                        <?php if (($data['footer_block2_text']) || ($data['footer_block2_title'])){ ?>
                        <h5 class="block_header"><?php if (empty($data['footer_block2_title'])) { echo "No title here"; }else{ echo stripslashes($data['footer_block2_title']); }?></h5>
                        <span style="font-size:11px;"><?php echo stripslashes($data['footer_block2_text']); ?></span>
                        <?php } ?>
					</div>
                    <div class="span-6">
                    <?php if (empty($data['footer_block3_text']) & empty($data['footer_block3_title'])){ ?>
                        <h5 class="block_header"><span class="colored">Twitter</span> feed</h5>
                        <div id="jstwitter" class="tweet">
                        </div>
                        <?php } ?>
                        <?php if (($data['footer_block3_text']) || ($data['footer_block3_title'])){ ?>
                        <h5 class="block_header"><?php if (empty($data['footer_block3_title'])) { echo "No title here"; }else{ echo stripslashes($data['footer_block3_title']); }?></h5>
                        <span style="font-size:11px;"><?php echo stripslashes($data['footer_block3_text']); ?></span>
                        <?php } ?>
					</div>
                    
                 <div class="span-6">
                        <h5 class="block_header"><?php echo stripslashes($data['footer_block4_title']); ?></h5>
                        <span style="font-size:11px;"><?php echo stripslashes($data['footer_block4_text']); ?></span>      

                    </div>
                </div>
            <div class="clear"></div>

        </div>
        <div class="clear"></div>

        <!--End footer-->
    </div>
    <!--End main wrapper-->
<span style="font-size: 10px; padding: 2px 0 0 300px;">All material &copy; 2009-2014, Lost Moon Radio <span class="red"> | </span>
Site design by Lindsay Hollinger <span class="yellow"> | </span> Site built by <a href="http://nelsonia.com" target="_blank"> Becky Nelson</a> <span class="purple"> | </span> Proudly powered by Wordpress</span>
	<!-- DEMO ONLY -->
    </div>


    <div class="clear"></div>
</body>
<?php wp_footer(); ?>
</html>