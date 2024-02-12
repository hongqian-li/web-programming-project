
<div class="row" id="footer">
    <div class="col-sm-4">
        <h4 class="footer-text"><?php echo 'Date: '.date("Y/m/d");?></h4>
        <h4 class="footer-text"><?php echo 'Time: '. date("h:i a");?></h4>
    </div>
    <div class="col-sm-4">
        <div id="footer-helper">
            <?php
            $currentPage= $_SERVER['SCRIPT_NAME'];
            $pageName = basename($currentPage);
            $lastModification = filemtime($pageName);
            $dateModified = date('Y-m-d H:i:s', $lastModification);
            ?>
            <h4 class="footer-text"><?php echo 'Page: '. $pageName;?></h4>
            <h4 class="footer-text"><?php echo 'Last modified: '. $dateModified;?></h4>
        </div>
    </div>
    <div class="col-sm-4">

    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>