<bx_injection:injection_content_after />
		
		                <div class="bx-clear"></div>
		
		            <bx_injection:banner_bottom />
		
		        </div> <!-- #bx-content-main -->
		
		        <bx_injection:injection_between_content_footer />
		
		    </div> <!-- #bx-content-container -->
		
		</div>

	</div> <!-- #bx-content-wrapper -->

	<div id="bx-footer-wrapper" class="bx-def-image-bg-footer bx-def-color-bg-footer bx-def-border-footer bx-shadow-footer">	
            <div class="bx-def-centered bx-def-padding-sec-leftright bx-def-page-width bx-def-box-sizing">
                <div id="bx-footer" class="bx-footer bx-def-padding-sec-left bx-def-padding-sec-right bx-clearfix">
                    <div class="bx-footer-cnt bx-content-padding-footer">
                        <bx_injection:injection_footer_before />

                        <div id="bx-menu-bottom">
                            <?php echo $this->getMenu('sys_footer'); ?>
                        </div>

                        <bx_injection:injection_footer_after />
                    </div>
                </div>
            </div>
	</div>

	<?php echo $this->getMenu('sys_site_action'); ?>
</div>

        <?php echo $this->parseSystemKey('system_injection_footer', $mixedKeyWrapperHtml);?>
       <bx_injection:injection_footer />
    </body>
</html>