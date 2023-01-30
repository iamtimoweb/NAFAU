function logout() {
    let logout_Form = $('#logout-form');
    Swal.fire({
        title: 'Ready to Leave? ',
        text: 'Select "Logout"',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ff0000',
        confirmButtonText: 'Logout',
    }).then((result) => {
        if (result.value) {
            logout_Form.submit();
            Swal.fire(
                'Logout successful!',
                `see you later.`,
                'success'
            )
        }
    })
}

/*****************************
 * Sliders*
 * ***************************/
let createSliderForm = $('#createSliderForm')
if (createSliderForm.length) {
    createSliderForm.validate({
        rules: {
            title: {
                required: true,
                maxlength: 255,
                minlength: 5
            },
            subtitle: {
                required: true,
                maxlength: 255,
                minlength: 5
            },
            image: {
                required: true,
            },
        },

        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
let EditSliderForm = $('#EditSliderForm')
if (EditSliderForm.length) {
    EditSliderForm.validate({
        rules: {
            title: {
                required: true,
                maxlength: 255,
                minlength: 5
            },
            subtitle: {
                required: true,
                maxlength: 255,
                minlength: 5
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
/*****************************
 * Testimonial*
 * ***************************/
let createTestimonialForm = $('#createTestimonialForm')
if (createTestimonialForm.length) {
    createTestimonialForm.validate({
        rules: {
            member: {
                required: true,
                maxlength: 255,
                minlength: 3
            },
            image: {
                required: true,
            },
            testimony: {
                required: true,
                maxlength: 500,
                minlength: 5
            },
        },

        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
let updateTestimonialForm = $('#updateTestimonialForm')
if (updateTestimonialForm.length) {
    updateTestimonialForm.validate({
        rules: {
            member: {
                required: true,
                maxlength: 255,
                minlength: 3
            },
            testimony: {
                required: true,
                maxlength: 500,
                minlength: 5
            },
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
/*******************************
 * Users
 * *****************************/
let userCreateForm = $('#userCreateForm')
if (userCreateForm.length) {
    userCreateForm.validate({
        rules: {
            firstname: {
                required: true,
                maxlength: 15,
                minlength: 3
            },
            lastname: {
                required: true,
                maxlength: 15,
                minlength: 3
            },
            email: {
                required: true,
                maxlength: 30,
                email: true
            },
            password: {
                required: true,
                minlength: 8,
            },
            password_confirmation: {
                required: true,
                minlength: 8,
                equalTo: password
            },
            phone_no: {
                required: true,
                maxlength: 10,
                minlength: 10,
                digits: true
            },
            image: {
                required: false,
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
let userEditForm = $('#userEditForm')
if (userEditForm.length) {
    userEditForm.validate({
        rules: {
            firstname: {
                required: true,
                maxlength: 15,
                minlength: 3
            },
            lastname: {
                required: true,
                maxlength: 15,
                minlength: 3
            },
            email: {
                required: true,
                maxlength: 30,
                email: true
            },
            phone_no: {
                required: true,
                maxlength: 10,
                minlength: 10,
                digits: true
            },
            image: {
                required: false,
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
/******************************
 * permissions
 * ****************************/
let createPermissionForm = $('#createPermissionForm')
if (createPermissionForm.length) {
    createPermissionForm.validate({
        rule: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 255
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
let editPermissionForm = $('#editPermissionForm')
if (editPermissionForm.length) {
    editPermissionForm.validate({
        rule: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 255
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
/******************************
 * roles
 * ****************************/
let createRoleForm = $('#createRoleForm')
if (createRoleForm.length) {
    createRoleForm.validate({
        rule: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 255
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
let editRoleForm = $('#editRoleForm')
if (editRoleForm.length) {
    editRoleForm.validate({
        rule: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 255
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

/******************************
 * Settings
 * ****************************/
let settingsForm = $('#settingsForm');
if (settingsForm.length) {
    settingsForm.validate({
        rules: {
            site_name: {
                required: true,
                maxlength: 30,
                minlength: 5
            },
            email: {
                required: true,
                maxlength: 30,
                email: true
            },
            contact_no: {
                required: true,
                maxlength: 10,
                minlength: 10,
                digits: true
            },
            location: {
                required: true,
                maxlength: 50,
                minlength: 5
            },
            twitter: {
                maxlength: 100,
                url: true
            },
            facebook: {
                maxlength: 100,
                url: true
            },
            linkedin: {
                maxlength: 100,
                url: true
            },
        },
        messages: {
            site_name: {
                required: 'Please enter the site name',
                maxlength: 'Site name should not exceed 30 characters',
                minlength: 'Site name should be atleast 5 characters'
            },
            email: {
                required: 'Please enter an email address',
                maxlength: 'Email address should not exceed 30 characters',
                minlength: 'Email address should be atleast 5 characters',
                email: 'Please enter a valid email address'
            },
            contact_no: {
                required: "Please enter your phone number",
                maxlength: "Phone number should not exceed 10 digits",
                minlength: "Phone number should be atleast 10 digits",
                digits: "Phone number should only be digits"
            },
            location: {
                required: 'Please enter the location for the company',
                maxlength: 'The location field should not exceed 30 characters',
                minlength: 'The location field should be atleast 5 characters'
            },
            twitter: {
                maxlength: 'Your twitter url should not exceed 100 characters',
                url: 'Please enter a  full url address for your twitter account i.e https://www.twitter.com/account'
            },
            facebook: {
                maxlength: 'Your twitter url should not exceed 100 characters',
                url: 'Please enter a full url address for your facebook account i.e https://www.facebook.com/account'
            },
            linkedin: {
                maxlength: 'Your linkedin url should not exceed 100 characters',
                url: 'Please enter a full url address for your linkedin account i.e https://www.linkedin.com/account'
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

/***************************
 * category
 **************************/
let createCategoryForm = $('#createCategoryForm')
if (createCategoryForm.length) {
    createCategoryForm.validate({
        rules: {
            name: {
                required: true,
                maxlength: 30,
                minlength: 3
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
let editCategoryForm = $('#editCategoryForm')
if (editCategoryForm.length) {
    editCategoryForm.validate({
        rules: {
            name: {
                required: true,
                maxlength: 30,
                minlength: 3
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

/*******************************
 * Faqs
 * *****************************/
let createFaqForm = $('#createFaqForm')
if (createFaqForm.length) {
    createFaqForm.validate({
        rules: {
            question: {
                required: true,
                maxlength: 100,
                minlength: 5
            },
            category_id: {
                required: true,
                digits: true
            },
            answer: {
                required: true,
                maxlength: 500
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
let editFaqForm = $('#editFaqForm')
if (editFaqForm.length) {
    editFaqForm.validate({
        rules: {
            question: {
                required: true,
                maxlength: 100,
                minlength: 5
            },
            category_id: {
                required: true,
                digits: true
            },
            answer: {
                required: true,
                maxlength: 500
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

/***************************
 * members
 * *************************/
let memberCreateForm = $('#memberCreateForm')
if (memberCreateForm.length) {
    memberCreateForm.validate({
        rules: {
            farmer_identification_no: {
                required: true,
                maxlength: 30,
            },
            firstname: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            lastname: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            district: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            county: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            parish: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            village: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            gender: {
                required: true,
            },
            date_of_birth: {
                dateISO: true
            },
            age: {
                digits: true
            },
            phone: {
                maxlength: 10,
                minlength: 10,
                digits: true
            },
            nin: {
                maxlength: 14,
                minlength: 14,
            },
            'education_levels[]': {
                required: true,
            },
            profession: {
                maxlength: 30,
                minlength: 3,
            },
            occupation: {
                maxlength: 30,
                minlength: 3,
            },
            acrage: {
                number: true,
                min: 1
            },
            lat: {
                number: true
            },
            lng: {
                number: true
            },
            no_of_coffee_trees: {
                digits: true,
                min: 1
            },
            coffee_type: {
                required: true
            },
            no_of_dependants: {
                digits: true,
                min: 1
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
let memberEditForm = $('#memberEditForm')
if (memberEditForm.length) {
    memberEditForm.validate({
        rules: {
            farmer_identification_no: {
                required: true,
                maxlength: 30,
            },
            firstname: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            lastname: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            district: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            county: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            parish: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            village: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            gender: {
                required: true,
            },
            date_of_birth: {
                dateISO: true
            },
            age: {
                digits: true,
                min: 1
            },
            phone: {
                maxlength: 10,
                minlength: 10,
                digits: true
            },
            nin: {
                maxlength: 14,
                minlength: 14,
            },
            'education_levels[]': {
                required: true,
            },
            profession: {
                maxlength: 30,
                minlength: 3,
            },
            occupation: {
                maxlength: 30,
                minlength: 3,
            },
            acrage: {
                number: true,
                min: 1
            },
            lat: {
                number: true
            },
            lng: {
                number: true
            },
            no_of_coffee_trees: {
                digits: true,
                min: 1
            },
            coffee_type: {
                required: true
            },
            no_of_dependants: {
                digits: true,
                min: 1
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

/*****************************
 * students
 * ***************************/
let studentCreateForm = $('#studentCreateForm')
if (studentCreateForm.length) {
    studentCreateForm.validate({
        rules: {
            surname: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            other_names: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            date_of_birth: {
                dateISO: true
            },
            age: {
                min: 1,
                maxlength: 3,
                digits: true
            },
            student_id_no: {
                maxlength: 10
            },
            nationality: {
                maxlength: 30,
                minlength: 3,
            },
            religion: {
                maxlength: 30,
                minlength: 3,
            },
            location: {
                maxlength: 30,
                minlength: 3,
            },
            date_of_entry: {
                dateISO: true
            },
            entry_id: {
                required: true,
            },
            relationship_with_student: {
                required: true,
            },
            member_id: {
                required: true,
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
let studentEditForm = $('#studentEditForm')
if (studentEditForm.length) {
    studentEditForm.validate({
        rules: {
            surname: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            other_names: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            date_of_birth: {
                dateISO: true
            },
            age: {
                min: 1,
                maxlength: 3,
                digits: true
            },
            student_id_no: {
                maxlength: 10
            },
            nationality: {
                maxlength: 30,
                minlength: 3,
            },
            religion: {
                maxlength: 30,
                minlength: 3,
            },
            location: {
                maxlength: 30,
                minlength: 3,
            },
            date_of_entry: {
                dateISO: true
            },
            entry_id: {
                required: true,
            },
            relationship_with_student: {
                required: true,
            },
            member_id: {
                required: true,
            }
        },

        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

/******************************
 * Education Level
 * ****************************/
let createEducationLevelForm = $('#createEducationLevelForm')
if (createEducationLevelForm.length) {
    createEducationLevelForm.validate({
        rule: {
            education_level: {
                required: true,
                minlength: 3,
                maxlength: 255
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
let editEducationLevelForm = $('#editEducationLevelForm')
if (editEducationLevelForm.length) {
    editEducationLevelForm.validate({
        rule: {
            education_level: {
                required: true,
                minlength: 3,
                maxlength: 255
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}


/***************************
 * Profile
 **************************/
let updateProfileForm = $('#updateProfileForm')
if (updateProfileForm.length) {
    updateProfileForm.validate({
        rules: {
            firstname: {
                required: true,
                maxlength: 15,
                minlength: 3
            },
            lastname: {
                required: true,
                maxlength: 15,
                minlength: 3
            },
            phone_no: {
                required: true,
                maxlength: 10,
                minlength: 10,
                digits: true
            },
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

/***************************
 * Change Password
 **************************/
let changePasswordForm = $('#changePasswordForm')
if (changePasswordForm.length) {
    changePasswordForm.validate({
        rules: {
            current_password: {
                required: true,
                minlength: 8,
            },
            new_password: {
                required: true,
                minlength: 8,
            },
            confirm_new_password: {
                required: true,
                minlength: 8,
                equalTo: new_password
            },
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

/******************************
 * create loans for the farmers
 * ****************************/
let loanCreateForm = $('#loanCreateForm')
if (loanCreateForm.length) {
    loanEditForm.validate({
        rules: {
            member_id: {
                required: true,
            },
            amount: {
                required: true,
                number: true
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

let loanEditForm = $('#loanEditForm')
if (loanEditForm.length) {
    loanEditForm.validate({
        rules: {
            member_id: {
                required: true,
            },
            amount: {
                required: true,
                number: true
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

/******************************
 * create payment for the farmers
 * ****************************/
let paymentCreateForm = $('#paymentCreateForm')
if (paymentCreateForm.length) {
    paymentCreateForm.validate({
        rules: {
            member_id: {
                required: true,
            },
            amount: {
                required: true,
                number: true
            }

        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

let paymentEditForm = $('#paymentEditForm')
if (paymentEditForm.length) {
    paymentEditForm.validate({
        rules: {
            member_id: {
                required: true,
            },
            amount: {
                required: true,
                number: true
            }

        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

/******************************
 * Coffee (red cherries, kiboko, kase) for the farmers
 * ****************************/
let createRedCherriesForm = $('#createRedCherriesForm')
if (createRedCherriesForm.length) {
    createRedCherriesForm.validate({
        rules: {
            member_id: {
                required: true,
            },
            red_cherries_kgs: {
                required: true,
                digits: true
            },
            price: {
                required: true,
                digits: true
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

let editRedCherriesForm = $('#editRedCherriesForm')
if (editRedCherriesForm.length) {
    editRedCherriesForm.validate({
        rules: {
            member_id: {
                required: true,
            },
            red_cherries_kgs: {
                required: true,
                digits: true
            },
            price: {
                required: true,
                digits: true
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}


let createKibokoForm = $('#createKibokoForm')
if (createKibokoForm.length) {
    createKibokoForm.validate({
        rules: {
            member_id: {
                required: true,
            },
            kiboko_kgs: {
                required: true,
                digits: true
            },
            price: {
                required: true,
                digits: true
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

let editKibokoForm = $('#editKibokoForm')
if (editKibokoForm.length) {
    editKibokoForm.validate({
        rules: {
            member_id: {
                required: true,
            },
            kiboko_kgs: {
                required: true,
                digits: true
            },
            price: {
                required: true,
                digits: true
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

let createkaseForm = $('#createkaseForm')
if (createkaseForm.length) {
    createkaseForm.validate({
        rules: {
            member_id: {
                required: true,
            },
            kase_kgs: {
                required: true,
                digits: true
            },
            cutting: {
                required: true,
                digits: true
            },
            price: {
                required: true,
                digits: true
            },
            milling_charges: {
                required: true,
                digits: true
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}

let editkaseForm = $('#editkaseForm')
if (editkaseForm.length) {
    editkaseForm.validate({
        rules: {
            member_id: {
                required: true,
            },
            kase_kgs: {
                required: true,
                digits: true
            },
            cutting: {
                required: true,
                digits: true
            },
            price: {
                required: true,
                digits: true
            },
            milling_charges: {
                required: true,
                digits: true
            }
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
}
