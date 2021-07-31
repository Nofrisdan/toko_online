<!-- ===================== LINK ================== -->
<?= $this->include("Link/" . $link); ?>

<!-- ========== Header =============== -->
<?= $this->include("StaticLay/Header"); ?>

<!-- ================ SIDE BAR ========== -->
<?= $this->include("StaticLay/Sidebar"); ?>

<!-- ======================= content ================= -->
<?= $this->renderSection("content"); ?>


<!-- ========================== Foooter ================= -->
<?= $this->include("StaticLay/Footer"); ?>

<!-- ======================= SCRIPT =================== -->
<?= $this->include("Link/" . $script); ?>

<?= $this->renderSection("script"); ?>