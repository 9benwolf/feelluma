<?php

/** @var yii\web\View $this */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/** @var $model app\models\ContactForm */

if (Yii::$app->session->hasFlash('success')) {
    echo '<p class="text-green-600">' . Yii::$app->session->getFlash('success') . '</p>';
}

$this->title = 'Contact Us';

$this->params['showNavbar'] = true;
?>


<section>
    <div class="container max-w-[1200px] mx-auto py-10 mt-12 px-4 sm:px-0">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-5 lg:justify-around">

            <div class="space-y-5 w-full lg:max-w-[750px]">

                <?php
                $form = ActiveForm::begin([
                    'options' => ['class' => 'space-y-5 w-full max-w-[750px]']
                ]);
                ?>

                <div>
                    <label>Name:</label>
                    <?= $form->field($model, 'name')->textInput(['class' => 'border p-2 rounded w-full'])->label(false) ?>
                </div>

                <div>
                    <label>Email:</label>
                    <?= $form->field($model, 'email')->input('email', ['class' => 'border p-2 rounded w-full'])->label(false) ?>
                </div>

                <div>
                    <label>Phone:</label>
                    <?= $form->field($model, 'phone')->textInput(['class' => 'border p-2 rounded w-full'])->label(false) ?>
                </div>

                <div>
                    <label>Message:</label>
                    <?= $form->field($model, 'message')->textarea([
                        'class' => 'border p-2 rounded w-full h-32'
                    ])->label(false) ?>
                </div>

                <div>
                    <?= Html::submitButton('Submit', [
                        'class' => 'bg-[#B91C1C] text-white text-base -tracking-[2.5%] leading-[150%] font-bold px-5 py-[8px] rounded-[4px]'
                    ]) ?>

                </div>
            </div>

            <div class="space-y-5">
                <h2 class="font-semibold text-[32px]">Contact <strong>Details</strong></h2>

                <div class="space-y-2.5">
                    <div class="flex gap-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                clip-rule="evenodd" />
                        </svg>

                        <p>1-888-304-8106</p>
                    </div>

                    <div class="flex gap-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>

                        <p> contact@feelluma.com</p>
                    </div>

                    <div class="flex gap-2.5 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                                clip-rule="evenodd" />
                        </svg>

                        <div>
                            <p>Monday - Friday: 7AM - 1AM and</p>
                            <p>Saturday - Sunday: 8AM - 9PM(EST)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php ActiveForm::end(); ?>



<?php $this->beginBlock('customFooter'); ?>
<?= $this->render('/partials/variant-footer') ?>
<?php $this->endBlock(); ?>