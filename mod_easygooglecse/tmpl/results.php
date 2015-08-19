<?php
/**
 * @package     EasyGoogleCSE
 * @subpackage  mod_easygooglecse
 * @copyright   Copyright © 2015 Craig Phillips Pty Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="easygooglecse_module<?php echo $moduleclass_sfx; ?>">
    <script>
        (function() {
            var cx = '<?php echo $key; ?>';
            var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
            gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
                '//cse.google.com/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
        })();
    </script>

    <gcse:search resultsUrl="<?php echo $resultURL; ?>" enableAutoComplete="true"></gcse:search>
</div>
