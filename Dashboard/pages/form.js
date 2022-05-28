JotForm.newDefaultTheme = true;
JotForm.extendsNewTheme = false;
JotForm.newPaymentUIForNewCreatedForms = true;
JotForm.newPaymentUI = true;
JotForm.clearFieldOnHide = "disable";
JotForm.submitError = "jumpToFirstError";

JotForm.init(function() {
    /*INIT-START*/
    if (window.JotForm && JotForm.accessible) $('input_13').setAttribute('tabindex', 0);

    JotForm.calendarMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    JotForm.calendarDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    JotForm.calendarOther = {
        "today": "Today"
    };
    var languageOptions = document.querySelectorAll('#langList li');
    for (var langIndex = 0; langIndex < languageOptions.length; langIndex++) {
        languageOptions[langIndex].on('click', function(e) {
            setTimeout(function() {
                JotForm.setCalendar("8", false, {
                    "days": {
                        "monday": true,
                        "tuesday": true,
                        "wednesday": true,
                        "thursday": true,
                        "friday": true,
                        "saturday": true,
                        "sunday": true
                    },
                    "future": true,
                    "past": true,
                    "custom": false,
                    "ranges": false,
                    "start": "",
                    "end": ""
                });
            }, 0);
        });
    }
    JotForm.onTranslationsFetch(function() {
        JotForm.setCalendar("8", false, {
            "days": {
                "monday": true,
                "tuesday": true,
                "wednesday": true,
                "thursday": true,
                "friday": true,
                "saturday": true,
                "sunday": true
            },
            "future": true,
            "past": true,
            "custom": false,
            "ranges": false,
            "start": "",
            "end": ""
        });
    });
    JotForm.setPhoneMaskingValidator('input_5_full', '(###) ###-####');
    if (window.JotForm && JotForm.accessible) $('input_10').setAttribute('tabindex', 0);
    if (window.JotForm && JotForm.accessible) $('input_11').setAttribute('tabindex', 0);
    if (window.JotForm && JotForm.accessible) $('input_15').setAttribute('tabindex', 0);
    JotForm.setCustomHint('input_15', 'Type here...');
    if (window.JotForm && JotForm.accessible) $('input_22').setAttribute('tabindex', 0);
    JotForm.setCustomHint('input_22', 'Type here...');
    JotForm.alterTexts(undefined);
    /*INIT-END*/
});

JotForm.prepareCalculationsOnTheFly([null, {
    "name": "covid19Vaccine",
    "qid": "1",
    "text": "COVID-19 Vaccine Registration Form",
    "type": "control_head"
}, {
    "name": "register",
    "qid": "2",
    "text": "Register",
    "type": "control_button"
}, {
    "name": "name",
    "qid": "3",
    "text": "Name",
    "type": "control_fullname"
}, {
    "name": "email",
    "qid": "4",
    "subLabel": "example@example.com",
    "text": "Email",
    "type": "control_email"
}, {
    "name": "phoneNumber",
    "qid": "5",
    "text": "Phone Number",
    "type": "control_phone"
}, {
    "name": "address",
    "qid": "6",
    "text": "Address",
    "type": "control_address"
}, null, {
    "name": "birthDate",
    "qid": "8",
    "text": "Birth Date",
    "type": "control_datetime"
}, {
    "name": "gender",
    "qid": "9",
    "text": "Gender",
    "type": "control_radio"
}, {
    "name": "insuranceCompany",
    "qid": "10",
    "text": "Insurance Company",
    "type": "control_textbox"
}, {
    "name": "insuranceId",
    "qid": "11",
    "text": "Insurance ID",
    "type": "control_textbox"
}, {
    "name": "pageBreak",
    "qid": "12",
    "text": "Page Break",
    "type": "control_pagebreak"
}, {
    "name": "nationalSecurity",
    "qid": "13",
    "text": "National Security Number",
    "type": "control_textbox"
}, {
    "name": "healthAnd",
    "qid": "14",
    "text": "Health and Medical History",
    "type": "control_head"
}, {
    "name": "doYou",
    "qid": "15",
    "subLabel": "Please indicate all health issues that are considered within the risk group",
    "text": "Do you have any chronic health condition?",
    "type": "control_textarea"
}, {
    "name": "pleaseList16",
    "qid": "16",
    "text": "Please list your current medication",
    "type": "control_widget"
}, {
    "name": "pleaseList17",
    "qid": "17",
    "text": "Please list down your allergies",
    "type": "control_widget"
}, null, {
    "name": "pleaseCheck",
    "qid": "19",
    "text": "Please check the symptoms that apply",
    "type": "control_checkbox"
}, {
    "name": "haveYou",
    "qid": "20",
    "text": "Have you been diagnosed with COVID-19?",
    "type": "control_radio"
}, null, {
    "name": "ifYes22",
    "qid": "22",
    "text": "If yes, please provide further details (date of diagnition, were you hospitalized or not, treatment, etc.)",
    "type": "control_textarea"
}, {
    "name": "iHereby23",
    "qid": "23",
    "text": "I hereby declare that all the given information are accurate.",
    "type": "control_radio"
}]);
setTimeout(function() {
    JotForm.paymentExtrasOnTheFly([null, {
        "name": "covid19Vaccine",
        "qid": "1",
        "text": "COVID-19 Vaccine Registration Form",
        "type": "control_head"
    }, {
        "name": "register",
        "qid": "2",
        "text": "Register",
        "type": "control_button"
    }, {
        "name": "name",
        "qid": "3",
        "text": "Name",
        "type": "control_fullname"
    }, {
        "name": "email",
        "qid": "4",
        "subLabel": "example@example.com",
        "text": "Email",
        "type": "control_email"
    }, {
        "name": "phoneNumber",
        "qid": "5",
        "text": "Phone Number",
        "type": "control_phone"
    }, {
        "name": "address",
        "qid": "6",
        "text": "Address",
        "type": "control_address"
    }, null, {
        "name": "birthDate",
        "qid": "8",
        "text": "Birth Date",
        "type": "control_datetime"
    }, {
        "name": "gender",
        "qid": "9",
        "text": "Gender",
        "type": "control_radio"
    }, {
        "name": "insuranceCompany",
        "qid": "10",
        "text": "Insurance Company",
        "type": "control_textbox"
    }, {
        "name": "insuranceId",
        "qid": "11",
        "text": "Insurance ID",
        "type": "control_textbox"
    }, {
        "name": "pageBreak",
        "qid": "12",
        "text": "Page Break",
        "type": "control_pagebreak"
    }, {
        "name": "nationalSecurity",
        "qid": "13",
        "text": "National Security Number",
        "type": "control_textbox"
    }, {
        "name": "healthAnd",
        "qid": "14",
        "text": "Health and Medical History",
        "type": "control_head"
    }, {
        "name": "doYou",
        "qid": "15",
        "subLabel": "Please indicate all health issues that are considered within the risk group",
        "text": "Do you have any chronic health condition?",
        "type": "control_textarea"
    }, {
        "name": "pleaseList16",
        "qid": "16",
        "text": "Please list your current medication",
        "type": "control_widget"
    }, {
        "name": "pleaseList17",
        "qid": "17",
        "text": "Please list down your allergies",
        "type": "control_widget"
    }, null, {
        "name": "pleaseCheck",
        "qid": "19",
        "text": "Please check the symptoms that apply",
        "type": "control_checkbox"
    }, {
        "name": "haveYou",
        "qid": "20",
        "text": "Have you been diagnosed with COVID-19?",
        "type": "control_radio"
    }, null, {
        "name": "ifYes22",
        "qid": "22",
        "text": "If yes, please provide further details (date of diagnition, were you hospitalized or not, treatment, etc.)",
        "type": "control_textarea"
    }, {
        "name": "iHereby23",
        "qid": "23",
        "text": "I hereby declare that all the given information are accurate.",
        "type": "control_radio"
    }]);
}, 20);