<?php
$title = 'track-order';
require_once 'inc/header.php';
require_once 'inc/nav.php';

?>

<main>
  <section
    class="page-top d-flex justify-content-center align-items-center flex-column text-center">
    <div class="page-top__overlay"></div>
    <div class="position-relative">
      <div class="page-top__title mb-3">
        <h2>تتبع طلبك</h2>
      </div>
      <div class="page-top__breadcrumb">
        <a class="text-decoration-none text-primary h5" href="<?= url('home') ?>">الرئيسية</a> /
        <span class="text-gray">تتبع طلبك</span>
      </div>
    </div>
  </section>

  <section class="section-container my-5 py-5">
    <p class="mb-5">فضلًا أدخل رقم طلبك في الصندوق أدناه وأضغط زر لتتبعه "تتبع الطلب" لعرض حالته. بإمكانك العثور على رقم الطلب في البريد المرسل إليك والذي يحتوي على فاتورة تأكيد الطلب.</p>
    <form action="">
      <div class="mb-4">
        <label for="">رقم الطلب</label>
        <input class="form__input" placeholder="ستجده في رسالة تأكيد طلبك." type="text">
      </div>
      <div class="mb-4">
        <label for="">البريد الالكتروني للفاتورة</label>
        <input class="form__input" placeholder="البريد الالكتروني الذي استخدمته اثناء اتمام الطلب" type="text">
      </div>
      <button class="primary-button">تتبع طلبك</button>
    </form>
  </section>
</main>


<?php require_once 'inc/footer.php'; ?>