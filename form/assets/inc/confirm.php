<section class="p-form">
    <div class="p-form__inner l-contents-container">
        <p class="p-form__please p-confirm-heading">
            <img src="assets/images/phoneIcon.webp" alt="">
            <span>確認画面</span>
        </p>
        <form method="post" action="">
            <div class="p-form__confirm">
                <label>お名前[漢字]</label>
                <p>
                    <?php echo h($_POST['name01']); ?>
                </p>
            </div>
            <div class="p-form__confirm">
                <label>お名前[かな]</label>
                <p>
                    <?php echo h($_POST['name02']); ?>
                </p>
            </div>
            <div class="p-form__confirm">
                <label>メールアドレス</label>
                <p>
                    <?php echo h($_POST['email']); ?>
                </p>
            </div>
            <div class="p-form__confirm">
                <label>電話番号</label>
                <p>
                    <?php echo h($_POST['tel']); ?>
                </p>
            </div>
            <div class="p-form__confirm">
                <label>性別</label>
                <p>
                    <?php if ($_POST['gender'] === "男性") {
                        echo '男性';
                    } elseif (($_POST['gender'] === "女性")) {
                        echo '女性';
                    } else {
                        echo 'その他';
                    } ?>
                </p>
            </div>

            <div class="p-form__confirm">
                <label>住所</label>
                <p>
                    <?php echo h($_POST['zip']); ?><br>
                    <?php echo h($_POST['address1']); ?><br>
                    <?php echo h($_POST['address2']); ?><br>
                    <?php echo h($_POST['address3']); ?><br>
                </p>
            </div>


            <div class="p-form__confirm">
                <label>セレクトテスト</label>
                <p>
                    <?php
                    if ($_POST['how'] === "セレクトテスト01") {
                        echo 'セレクトテスト01';
                    } elseif ($_POST['how'] === "セレクトテスト02") {
                        echo 'セレクトテスト02';
                    }
                    ?>
                </p>
            </div>
            <div class="p-form__confirm">
                <label>チェックテスト</label>
                <ul>
                    <?php foreach ($_POST['function'] as $function_val) { ?>
                        <li>
                            <?php echo h($function_val); ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="p-form__confirm">
                <label>テキストテスト</label>
                <p>
                    <?php $contact = preg_replace("/\{(.*)\}/", '', $_POST['contact']); ?>
                    <?php echo h($contact); ?>
                </p>
            </div>
            <div class="p-form__confirm">
                <label>プライバシーポリシー</label>
                <p>
                    <?php if ($_POST['agreement'] === "同意") {
                        echo '同意する';
                    } else {
                        echo '同意しない';
                    } ?>
                </p>
            </div>
            <div class="p-form__data">
                <input type="button" onclick="history.back()" class="p-form__submit" value="戻る">
                <input type="submit" name="btn_submit" value="送信" class="p-form__submit">
                <input type="hidden" name="name01" value="<?php echo h($_POST['name01']); ?>">
                <input type="hidden" name="name02" value="<?php echo h($_POST['name02']); ?>">
                <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
                <input type="hidden" name="tel" value="<?php echo h($_POST['tel']); ?>">
                <input type="hidden" name="gender" value="<?php echo h($_POST['gender']); ?>">
                <input type="hidden" name="zip" value="<?php echo h($_POST['zip']); ?>">
                <input type="hidden" name="address1" value="<?php echo h($_POST['address1']); ?>">
                <input type="hidden" name="address2" value="<?php echo h($_POST['address2']); ?>">
                <input type="hidden" name="address3" value="<?php echo h($_POST['address3']); ?>">
                <input type="hidden" name="how" value="<?php echo h($_POST['how']); ?>">
                <?php
                foreach ($_POST['function'] as $function) { ?>
                    <input type="hidden" name="function[]" value="<?php echo h($function); ?>">
                <?php } ?>
                <input type="hidden" name="question" value="<?php echo h($contact); ?>">
                <input type="hidden" name="agreement" value="<?php echo h($_POST['agreement']); ?>">
            </div>
        </form>
    </div>
</section>