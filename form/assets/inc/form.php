<form id="form" class="p-form__width" method="post" action="" enctype="multipart/form-data">
    <div class="p-form__wrap p-form__top">
        <label class="p-form__top--label">お名前[漢字]</label>
        <input type="text" class="p-form__default" name="name01" value="<?php if (!empty($_POST['name01'])) {
                                                                            echo h($_POST['name01']);
                                                                        } ?>"><br />
        <p class="error_place_1"></p>
    </div>
    <div class="p-form__wrap  p-form__top">
        <label class="p-form__top--label">お名前[かな]</label>
        <input type="text" class="p-form__default" name="name02" value="<?php if (!empty($_POST['name02'])) {
                                                                            echo h($_POST['name02']);
                                                                        } ?>"><br />
        <p class="error_place_2"></p>
    </div>
    <div class="p-form__wrap  p-form__top">
        <label class="p-form__top--label">メールアドレス</label>
        <input id="email" type="text" class="p-form__default" name="email" value="<?php if (!empty($_POST['email'])) {
                                                                                        echo h($_POST['email']);
                                                                                    } ?>"><br />
        <p class="error_place_3"></p>
    </div>
    <div class="p-form__wrap  p-form__top">
        <label class="p-form__top--label">メールアドレス(再入力)</label>
        <input type="text" class="p-form__default" name="email02" value="<?php if (!empty($_POST['email02'])) {
                                                                                echo h($_POST['email02']);
                                                                            } ?>"><br />
        <p class="error_place_4"></p>
    </div>
    <div class="p-form__wrap p-form__top">
        <label class="p-form__top--label">電話番号</label>
        <input type="text" class="p-form__default" name="tel" value="<?php if (!empty($_POST['tel'])) {
                                                                            echo h($_POST['tel']);
                                                                        } ?>"><br />
        <p class="error_place_5"></p>
    </div>
    <div class="p-form__wrap p-form__top">
        <label class="p-form__top--label">性別</label><br class="tab-appea">
        <label for="gender_male" class=""><input id="gender_male" type="radio" name="gender" value="男性" <?php if (
                                                                                                            !empty($_POST['gender']) &&
                                                                                                            $_POST['gender'] === "男性"
                                                                                                        ) {
                                                                                                            echo 'checked';
                                                                                                        } ?>>男性</label>
        <label for="gender_female" class=""><input id="gender_female" type="radio" name="gender" value="女性" <?php if (
                                                                                                                !empty($_POST['gender']) &&
                                                                                                                $_POST['gender'] === "女性"
                                                                                                            ) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>女性</label>
        <label for="gender_other"><input id="gender_other" type="radio" name="gender" value="その他" <?php if (!empty($_POST['gender']) && $_POST['gender'] === "その他") {
                                                                                                        echo 'checked';
                                                                                                    } ?>>その他</label>
        <p class="error_place_6"></p>
    </div>

    <div class="p-form__wrap">
        <label class="p-form__top--label">郵便番号</label><br class="tab-appea">
        <input type="text" class="p-form__top--zip" id="郵便番号" value="<?php if (!empty($_POST['zip'])) {
                                                                            echo h($_POST['zip']);
                                                                        } ?>" onKeyUp="AjaxZip3.zip2addr(this, '', 'address1', 'address2');" name="zip" maxlength="7" placeholder="0000000"><span class="p-form__zipTxt"><br class="sp-appea">（ハイフン無しでご入力ください）</span><br>
        <p class="error_place_7"></p>
    </div>
    <div class="p-form__wrap">
        <label for="" class="p-form__top--label">都道府県</label><br class="tab-appea">
        <select name="address1" class=">
                    <option value="">選択してください</option>
                    <optgroup label=" 東北地方">
            <option value="北海道" <?php if (!empty($_POST['address1']) && $_POST['address1'] === "北海道") {
                                    echo "selected";
                                } ?>>北海道</option>
            <option value="青森県" <?php if (!empty($_POST['address1']) && $_POST['address1'] === "青森県") {
                                    echo "selected";
                                } ?>>青森県</option>
            <option value="岩手県" <?php if (!empty($_POST['address1']) && $_POST['address1'] === "岩手県") {
                                    echo "selected";
                                } ?>>岩手県</option>
            <option value="秋田県" <?php if (!empty($_POST['address1']) && $_POST['address1'] === "秋田県") {
                                    echo "selected";
                                } ?>>秋田県</option>
            <option value="宮城県" <?php if (!empty($_POST['address1']) && $_POST['address1'] === "宮城県") {
                                    echo "selected";
                                } ?>>宮城県</option>
            <option value="山形県" <?php if (!empty($_POST['address1']) && $_POST['address1'] === "山形県") {
                                    echo "selected";
                                } ?>>山形県</option>
            <option value="福島県" <?php if (!empty($_POST['address1']) && $_POST['address1'] === "福島県") {
                                    echo "selected";
                                } ?>>福島県</option>
            </optgroup>
            <optgroup label="関東地方">
                <option value="栃木県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "栃木県"
                                    ) {
                                        echo "selected";
                                    } ?>>栃木県</option>
                <option value="群馬県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "群馬県"
                                    ) {
                                        echo "selected";
                                    } ?>>群馬県</option>
                <option value="茨城県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "茨城県"
                                    ) {
                                        echo "selected";
                                    } ?>>茨城県</option>
                <option value="埼玉県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "埼玉県"
                                    ) {
                                        echo "selected";
                                    } ?>>埼玉県</option>
                <option value="東京都" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "東京都"
                                    ) {
                                        echo "selected";
                                    } ?>>東京都</option>
                <option value="千葉県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "千葉県"
                                    ) {
                                        echo "selected";
                                    } ?>>千葉県</option>
                <option value="神奈川県" <?php if (
                                            !empty($_POST['address1']) &&
                                            $_POST['address1'] === "神奈川県"
                                        ) {
                                            echo "selected";
                                        } ?>>神奈川県</option>
            </optgroup>
            <optgroup label="中部地方">
                <option value="山梨県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "山梨県"
                                    ) {
                                        echo "selected";
                                    } ?>>山梨県</option>
                <option value="長野県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "長野県"
                                    ) {
                                        echo "selected";
                                    } ?>>長野県</option>
                <option value="新潟県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "新潟県"
                                    ) {
                                        echo "selected";
                                    } ?>>新潟県</option>
                <option value="富山県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "富山県"
                                    ) {
                                        echo "selected";
                                    } ?>>富山県</option>
                <option value="石川県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "石川県"
                                    ) {
                                        echo "selected";
                                    } ?>>石川県</option>
                <option value="福井県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "福井県"
                                    ) {
                                        echo "selected";
                                    } ?>>福井県</option>
                <option value="静岡県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "静岡県"
                                    ) {
                                        echo "selected";
                                    } ?>>静岡県</option>
                <option value="岐阜県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "岐阜県"
                                    ) {
                                        echo "selected";
                                    } ?>>岐阜県</option>
                <option value="愛知県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "愛知県"
                                    ) {
                                        echo "selected";
                                    } ?>>愛知県</option>
            </optgroup>
            <optgroup label="近畿地方">
                <option value="三重県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "三重県"
                                    ) {
                                        echo "selected";
                                    } ?>>三重県</option>
                <option value="滋賀県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "滋賀県"
                                    ) {
                                        echo "selected";
                                    } ?>>滋賀県</option>
                <option value="京都府" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "京都府"
                                    ) {
                                        echo "selected";
                                    } ?>>京都府</option>
                <option value="大阪府" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "大阪府"
                                    ) {
                                        echo "selected";
                                    } ?>>大阪府</option>
                <option value="兵庫県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "兵庫県"
                                    ) {
                                        echo "selected";
                                    } ?>>兵庫県</option>
                <option value="奈良県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "奈良県"
                                    ) {
                                        echo "selected";
                                    } ?>>奈良県</option>
                <option value="和歌山県" <?php if (
                                            !empty($_POST['address1']) &&
                                            $_POST['address1'] === "和歌山県"
                                        ) {
                                            echo "selected";
                                        } ?>>和歌山県</option>
            </optgroup>
            <optgroup label="四国地方">
                <option value="徳島県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "徳島県"
                                    ) {
                                        echo "selected";
                                    } ?>>徳島県</option>
                <option value="香川県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "香川県"
                                    ) {
                                        echo "selected";
                                    } ?>>香川県</option>
                <option value="愛媛県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "愛媛県"
                                    ) {
                                        echo "selected";
                                    } ?>>愛媛県</option>
                <option value="高知県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "高知県"
                                    ) {
                                        echo "selected";
                                    } ?>>高知県</option>
            </optgroup>
            <optgroup label="中国地方">
                <option value="鳥取県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "鳥取県"
                                    ) {
                                        echo "selected";
                                    } ?>>鳥取県</option>
                <option value="島根県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "島根県"
                                    ) {
                                        echo "selected";
                                    } ?>>島根県</option>
                <option value="岡山県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "岡山県"
                                    ) {
                                        echo "selected";
                                    } ?>>岡山県</option>
                <option value="広島県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "広島県"
                                    ) {
                                        echo "selected";
                                    } ?>>広島県</option>
                <option value="山口県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "山口県"
                                    ) {
                                        echo "selected";
                                    } ?>>山口県</option>
            </optgroup>
            <optgroup label="九州・沖縄地方">
                <option value="福岡県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "福岡県"
                                    ) {
                                        echo "selected";
                                    } ?>>福岡県</option>
                <option value="佐賀県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "佐賀県"
                                    ) {
                                        echo "selected";
                                    } ?>>佐賀県</option>
                <option value="長崎県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "長崎県"
                                    ) {
                                        echo "selected";
                                    } ?>>長崎県</option>
                <option value="大分県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "大分県"
                                    ) {
                                        echo "selected";
                                    } ?>>大分県</option>
                <option value="熊本県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "熊本県"
                                    ) {
                                        echo "selected";
                                    } ?>>熊本県</option>
                <option value="宮崎県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "宮崎県"
                                    ) {
                                        echo "selected";
                                    } ?>>宮崎県</option>
                <option value="鹿児島県" <?php if (
                                            !empty($_POST['address1']) &&
                                            $_POST['address1'] === "鹿児島県"
                                        ) {
                                            echo "selected";
                                        } ?>>鹿児島県</option>
                <option value="沖縄県" <?php if (
                                        !empty($_POST['address1']) &&
                                        $_POST['address1'] === "沖縄県"
                                    ) {
                                        echo "selected";
                                    } ?>>沖縄県</option>
        </select><br>
    </div>
    <div class="p-form__wrap">
        <p class="error_place_8"></p>
        <label class="p-form__top--label">市区町村</label>
        <input type="text" class="p-form__default" id="市区町村" name="address2" value="<?php if (!empty($_POST['address2'])) {
                                                                                        echo h($_POST['address2']);
                                                                                    } ?>"><br>
        <p class="error_place_9"></p>
    </div>
    <div class="p-form__wrap">
        <label class="p-form__top--label">番地・号・ビル名</label>
        <input type="text" class="p-form__default" id="番地・号" name="address3" value="<?php if (!empty($_POST['address3'])) {
                                                                                        echo h($_POST['address3']);
                                                                                    } ?>">
        <p class="error_place_10"></p>
    </div>
    <div class="p-form__bottoms">
        <div class="p-form__wrap p-form__bottom">
            <label class="p-form__question p-form__bottom--center">
                セレクトテスト</label>
            <select name="how" class="p-form__default">
                <option value="">選択してください</option>
                <option value="セレクトテスト01" <?php if (
                                                !empty($_POST['how']) &&
                                                $_POST['how'] === "セレクトテスト01"
                                            ) {
                                                echo 'selected';
                                            } ?>>セレクトテスト01</option>
                <option value="セレクトテスト02" <?php if (
                                                !empty($_POST['how']) &&
                                                $_POST['how'] === "セレクトテスト02"
                                            ) {
                                                echo 'selected';
                                            } ?>>セレクトテスト02</option>
            </select>
        </div>

    </div>

    <div class="p-form__wrap test01 p-form__bottom">
        <label class="p-form__question p-form__bottom--center ">
            チェックテスト</label>
        <div class="p-form__checks p-form__default">
            <label>
                <input type="checkbox" id="sample" class="box01" name="function[]" value="チェックテスト01" <?php if (!empty($_POST['function']) && in_array(
                                                                                                            "チェックテスト01",
                                                                                                            $_POST['function']
                                                                                                        )) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                チェックテスト01
            </label><br class="sp-appea">
            <label>
                <input type="checkbox" class="box01" name="function[]" value="チェックテスト02" <?php if (!empty($_POST['function']) && in_array("チェックテスト02", $_POST['function'])) {
                                                                                                echo "checked";
                                                                                            } ?>> チェックテスト02
            </label><br class="sp-appea">

        </div>
    </div>

    <div class="p-form__wrap p-form__bottom">
        <label class="p-form__question p-form__bottom--center">テキストテスト</label>
        <textarea class="p-form__textarea p-form__bottom--center p-form__default" name="contact" placeholder="(任意・150字まで)"><?php if (!empty($_POST['contact'])) {
                                                                                                                                echo h($_POST['contact']);
                                                                                                                            } ?></textarea>
    </div>
    <div class="p-form__wrap p-form__default">
        <label for="agreement" class="p-form__bottom--center"><input id="agreement" type="checkbox" name="agreement" value="同意" <?php if (!empty($_POST['agreement']) && $_POST['agreement'] === "同意") {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?>>個人情報保護方針に同意する</label>
        <p class="var error_place_11"></p>
    </div>
    <div class="p-form__bottom--center p-form__default">
        <input type="submit" class="p-form__submit" name="btn_confirm" value="応募する">
    </div>
    </div>
</form>