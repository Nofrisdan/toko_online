<!-- ===================== LINK ================== -->
<?= $this->include("Link/" . $link); ?>

<!-- ========== Header =============== -->
<?= $this->include("StaticLay/UserHeader"); ?>

<!-- ======================= content ================= -->
<?= $this->renderSection("content"); ?>

<?= $this->renderSection("script"); ?>
<!-- ========================== Foooter ================= -->
<?= $this->include("StaticLay/Footer"); ?>


<!-- ======================= SCRIPT =================== -->
<?= $this->include("Link/" . $script); ?>