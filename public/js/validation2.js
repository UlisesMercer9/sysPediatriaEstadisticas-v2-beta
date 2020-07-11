$(document).ready(function(){
  
   var email = $("#email").val();

	  $.validator.setDefaults({
          highlight: function(element){
            $(element)
               .closest('.input-field')
               .addClass('input-field2');
               
          },
           unhighlight: function(element){
            $(element)
               .closest('.input-field')
               .removeClass('input-field2');
          }

        });

	   $.validator.addMethod('latinos', function(value, element)
        {
           return this.optional(element) || /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/i.test(value);
        });

	    $.validator.addMethod('caracteres', function(value, element)
        {
           return this.optional(element) || /^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/i.test(value);
        });


	$("#EspeCreateForm").validate({

          rules:{
           	nombre: {
           		required: true,
                latinos: true
           	 },
           	apellidos: {
           		required: true,
                latinos: true
           	 },
           	cedula: {
                required:true,
                 digits: true
           	},
           	email: {
           		required: true,
           		email: true,
                remote: {
                   url: 'http://localhost:8000/checkmail?email=' + email,
                   type: "get"          
               }
           	 },
            password: {
                required: true
             },
            password2: {
                required: true,
                equalTo: "#password"

             },
            especialidad: {
            	required: true,
            	latinos: true
            },
            organizacion: {
            	required: true
            },
            telefono: {
                required: true,
                digits: true
            },

            estado: "required",

            ciudad: "required",

            localidad: {
                required: true,
                latinos: true
            },
            postal: {
                required: true,
                digits: true
            },
            path:{
                required:true
             }
           },
         messages: {
           	nombre: {
           		required: 'El campo nombre es requerido',
                latinos: 'Solo se aceptan letras'
           	},
           	apellidos: {
           		required: 'El campo apellidos es requerido',
                latinos: 'Solo se aceptan letras'
           	},
           	cedula: {
                required: 'El campo cedula es requerido',
                 digits: 'Solo se aceptan numeros'

           	},
           	email: {
           		required: 'El campo email es requerido',
           		email:   'Introduzca un email valido ',
                remote: 'El correo ya esta en uso'
                
           	},
            password: {
                required: 'La contraseña es requerida'
            }, 
            password2: {
                required: 'La contraseña es requerida',
                equalTo: 'Las contraseñas deben coincidir'
            },
            especialidad: {
                required: 'El campo especialidad es requerido',
                latinos: 'Solo se aceptan letras'
            },
            organizacion: {
            	required: 'El campo organizacion es requerido'
            },
            telefono: {
                required: 'El campo telefono es requerido',
                digits: 'Solo se aceptan numeros'
            },
            estado: {
            	required: '<span class="red-text">El campo estado es obligatorio</span>'
            },
            ciudad: {
              required: '<span class="red-text">El campo ciudad es obligatorio</span>'
            },
            localidad: {
            	required: 'El campo localidad es requerido',
            	latinos: 'Solo se aceptan letras'
            },
            postal: {
                required: 'El campo postal es requerido',
                digits: 'Solo se aceptan numeros'
            },
            path:{
                required: ''
            }
            
           },
             errorElement : 'div',
             errorPlacement: function(error, element) {
             var placement = $(element).data('error');
             if (placement) {
               $(placement).append(error)
             } else {
               error.insertAfter(element);
             }
           }
      	});


	$("#EspeUpdateForm").validate({

          rules:{
           	nombre: {
           		required: true,
                latinos: true
           	 },
           	apellidos: {
           		required: true,
                latinos: true
           	 },
           	cedula: {
                required:true
           	},
           	email: {
           		required: true,
           		email: true,
                remote: {
                   url: 'http://localhost:8000/checkmail?email=' + email,
                   type: "get"          
               }
           	 },
            password2: {
                
                equalTo: "#password"

             },
            especialidad: {
            	required: true
            },
            organizacion: {
            	required: true
            },
            telefono: {
                required: true
            },

             estado: "required",

            ciudad: "required",
            
            localidad: {
                required: true
            },
            postal: {
                required: true
            },
            
           },
         messages: {
           	nombre: {
           		required: 'El campo nombre es requerido',
                latinos: 'Solo se aceptan letras'
           	},
           	apellidos: {
           		required: 'El campo apellidos es requerido',
                latinos: 'Solo se aceptan letras'
           	},
           	cedula: {
                required: 'El campo cedula es requerido'
           	},
           	email: {
           		required: 'El campo email es requerido',
           		email:   'Introduzca un email valido ',
                remote: 'El correo ya esta en uso'
                
           	},
           
            password2: {
                equalTo: 'Las contraseñas deben coincidir'
            },
            especialidad: {
                required: 'El campo especialidad es requerido'
            },
            organizacion: {
            	required: 'El campo organizacion es requerido'
            },
            telefono: {
                required: 'El campo telefono es requerido'
            },
           estado: {
              required: '<span class="red-text">El campo estado es obligatorio</span>'
            },
            ciudad: {
              required: '<span class="red-text">El campo ciudad es obligatorio</span>'
            },
            localidad: {
            	required: 'El campo localidad es requerido'
            },
            postal: {
                required: 'El campo postal es requerido'
            },
           
           },
             errorElement : 'div',
             errorPlacement: function(error, element) {
             var placement = $(element).data('error');
             if (placement) {
               $(placement).append(error)
             } else {
               error.insertAfter(element);
             }
           }
      	});

});