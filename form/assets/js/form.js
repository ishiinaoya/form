$(function () {
    $('form').validate({
        rules: {

            name01: {
                required: true
            },
            name02: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            email02: {
                required: true,
                equalTo: "#email"
            },
            tel: {
                required: true
            },
            gender: {
                required: true
            },
            zip: {
                required: true
            },
            address1: {
                required: true
            },
            address2: {
                required: true
            },
            address3: {
                required: true
            },
            agreement: {
                required: true
            },
            // 'val[]': {
            //     required: true
            // },
        },
        //エラーメッセージの設定
        messages: {

            name01: {
                required: '※お名前を入力してください'
            },
            name02: {
                required: '※ふりがなを入力してください'
            },
            email: {
                required: '※E-mailアドレスを入力してください',
                email: 'メールアドレスを正しく入力してください'
            },
            email02: {
                required: "※E-mailアドレスを入力してください",
                equalTo: "E-mailが一致しません"
            },
            tel: {
                required: '※電話番号を入力してください'
            },
            gender: {
                required: '※性別を選択してください'
            },
            zip: {
                required: '※郵便番号を入力してください'
            },
            address1: {
                required: '※都道府県を選択してください'
            },
            address2: {
                required: '※市区町村を入力してください'
            },
            address3: {
                required: '※番地・号・ビル名を入力してください'
            },
            agreement: {
                required: '※必須項目です'
            },
            // 'val[]': {
            //     required: '※チェックボックスの内容'
            // },
        },
        errorPlacement: function (error, element) {
            if (element.attr('name') == 'name01') {
                error.insertAfter('.error_place_1')
            } else if (element.attr('name') == 'name02') {
                error.insertAfter('.error_place_2')
            } else if (element.attr('name') == 'email') {
                error.insertAfter('.error_place_3')
            } else if (element.attr('name') == 'email02') {
                error.insertAfter('.error_place_4')
            } else if (element.attr('name') == 'tel') {
                error.insertAfter('.error_place_5')
            } else if (element.attr('name') == 'gender') {
                error.insertAfter('.error_place_6')
            } else if (element.attr('name') == 'zip') {
                error.insertAfter('.error_place_7')
            } else if (element.attr('name') == 'address1') {
                error.insertAfter('.error_place_8')
            } else if (element.attr('name') == 'address2') {
                error.insertAfter('.error_place_9')
            } else if (element.attr('name') == 'address3') {
                error.insertAfter('.error_place_10')
            } else if (element.attr('name') == 'agreement') {
                error.insertAfter('.error_place_11')
            }
        }
    })
});

//チェックボックスで選択可能な項目を制限//

/*$(function () {
    $('.box01').click(function () {
        var checked_length = $('.box01:checked').length;

        // 選択上限は3つまで
        if (checked_length >= 3) {
            $('.box01:not(:checked)').prop('disabled', true);
        } else {
            $('.box01:not(:checked)').prop('disabled', false);
        }
    });
});
*/