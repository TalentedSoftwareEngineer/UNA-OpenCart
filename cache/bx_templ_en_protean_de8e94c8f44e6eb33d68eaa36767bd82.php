<div class="bx-def-page-width mx-auto px-4 pt-4 box-border">
    <div id="bx-informer">
        <?php if(is_array($a['bx_repeat:messages'])) for($i=0; $i<count($a['bx_repeat:messages']); $i++){ ?>
            <div id="<?php echo $a['bx_repeat:messages'][$i]['id'];?>" class="bx-informer-msg <?php echo $a['bx_repeat:messages'][$i]['class'];?> flex items-center mt-4 first:mt-0 p-4 rounded-md">
                <div class="flex-none w-5 h-5">
                    <svg class="bx-informer-icon bx-informer-icon-info text-blue-400 h-5 w-5" x-description="Heroicon name: solid/information-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <svg class="bx-informer-icon bx-informer-icon-alert h-5 w-5 text-yellow-400" x-description="Heroicon name: solid/exclamation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <svg class="bx-informer-icon bx-informer-icon-error h-5 w-5 text-red-400" x-description="Heroicon name: solid/x-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-3 text-sm"><?php echo $a['bx_repeat:messages'][$i]['msg'];?></div>
            </div>
        <?php } else if(is_string($a['bx_repeat:messages'])) echo $a['bx_repeat:messages']; ?>
    </div>
</div>