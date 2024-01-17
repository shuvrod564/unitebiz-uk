 

    <nav aria-label="Blog Page Navigation">
        <ul class="pagination mt-4 mt-md-5 justify-content-center" id="blogPagination">
            <?php if( $firstArrow === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link" href="<?php echo $prevPageUrl; ?>" aria-label="Previous">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
                    </a>
                </li>
            <?php } ?> 
            <li class="page-item">
                <a class="page-link <?php if($active==='1'){echo "active"; }else{ echo ''; }?>" href="index.php">1</a>
            </li>
            <li class="page-item">
                <a class="page-link <?php if($active==='2'){echo "active"; }else{ echo ''; }?>" href="#">2</a> 
            </li>  
            <li class="page-item">
                <a class="page-link <?php if($active==='3'){echo "active"; }else{ echo ''; }?>" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link <?php if($active==='4'){echo "active"; }else{ echo ''; }?>" href="#">4</a>
            </li> 
            <?php if( $lastArrow === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link" href="<?php echo $nextPageUrl; ?>" aria-label="Next">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>