$(document).ready(function(){
  
   var emailTutor = $("#emailTutor").val();

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

        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Seleccione el sexo");


	$("#infanteCreateForm").validate({

          rules:{
           	nombre: {
           		required: true,
                latinos: true
           	 },
           	apellido: {
           		required: true,
                latinos: true
           	 },
           	 edad: {
           		required: true,
                digits: true
           	 },

           	 sexo: "required",


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
           	 path_infante:{
                required:true
             },
             nombreTutor: {
           		required: true,
                latinos: true
           	 },
           	 apellidoTutor: {
           		required: true,
                latinos: true
           	 },
           	 emailTutor: {
           		required: true,
           		email: true,
                remote: {
                   url: 'http://localhost:8000/checkmailTutor?emailTutor=' + emailTutor,
                   type: "get"          
               }
           	 },
           	 passwordTutor: {
                required: true
             },
             passwordTutor2: {
                required: true,
                equalTo: "#passwordTutor"

             },
             telefonoTutor: {
                required: true,
                digits: true
            },
             estadoTutor: "required",

             ciudadTutor: "required",

             localidadTutor: {
                required: true,
                latinos: true
             },
             postalTutor: {
                required: true,
                digits: true
            }
         
           },
         messages: {
           	nombre: {
           		required: 'El campo nombre es requerido',
                latinos: 'Solo se aceptan letras'
           	},
           	apellido: {
           		required: 'El campo apellidos es requerido',
                latinos: 'Solo se aceptan letras'
           	},
           	edad: {
           		required: 'El campo edad es requerido',
           		digits: 'Solo se admiten numeros'
           	},
            sexo: {
              required: '<br /><span class="red-text">El campo sexo es requerido</span>'
            },
            estado: {
              required: '<span class="red-text">El campo estado es requerido</span>'
            },
            ciudad: {
              required: '<span class="red-text">El campo ciudad es requerido</span>'
            },
        
            localidad: {
            	required: 'El campo localidad es requerido',
            	latinos: 'Solo se aceptan letras'
            },
            postal: {
            	required: 'El campo postal es requerido',
            	digits: 'Solo se aceptan numeros'
            },
            path_infante:{
            	required: ''
            },
            nombreTutor: {
           		required: 'El campo nombre es requerido',
                latinos: 'Solo se aceptan letras'
           	},
           	apellidoTutor: {
           		required: 'El campo apellidos es requerido',
                latinos: 'Solo se aceptan letras'
           	},
           	emailTutor: {
           		required: 'El campo email es requerido',
           		email:   'Introduzca un email valido ',
                remote: 'El correo ya esta en uso'
                
           	},
            passwordTutor: {
                required: 'La contraseña es requerida'
            }, 
            passwordTutor2: {
                required: 'La contraseña es requerida',
                equalTo: 'Las contraseñas deben coincidir'
            },
            estadoTutor: {
              required: '<span class="red-text">El campo estado es requerido</span>'
            },
            ciudadTutor: {
              required: '<span class="red-text">El campo ciudad es requerido</span>'
            },
            telefonoTutor: {
                required: 'El campo telefono es requerido',
                digits: 'Solo se aceptan numeros'
            },
            localidadTutor: {
            	required: 'El campo localidad es requerido',
            	latinos: 'Solo se aceptan letras'
            },
            postalTutor: {
                required: 'El campo postal es requerido',
                digits: 'Solo se aceptan numeros'
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




       
  $("#infanteUpdateForm").validate({

          rules:{
             nombre: {
              required: true,
                latinos: true
             },
            apellido: {
              required: true,
                latinos: true
             },
             edad: {
              required: true,
                digits: true
             },

             sexo: "required",


             estado: "required",

             ciudad: "required",

             localidad: {
              required: true,
              latinos: true
             },
             postal: {
                required: true,
                digits: true
             }
           },
         messages: {
            nombre: {
              required: 'El campo nombre es requerido',
                latinos: 'Solo se aceptan letras'
            },
            apellido: {
              required: 'El campo apellidos es requerido',
                latinos: 'Solo se aceptan letras'
            },
            edad: {
              required: 'El campo edad es requerido',
              digits: 'Solo se admiten numeros'
            },
            sexo: {
              required: '<br /><span class="red-text">El campo sexo es requerido</span>'
            },
            estado: {
              required: '<span class="red-text">El campo estado es requerido</span>'
            },
            ciudad: {
              required: '<span class="red-text">El campo ciudad es requerido</span>'
            },
        
            localidad: {
              required: 'El campo localidad es requerido',
              latinos: 'Solo se aceptan letras'
            },
            postal: {
              required: 'El campo postal es requerido',
              digits: 'Solo se aceptan numeros'
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


    $("#tutorUpdateForm").validate({

         rules:{
            nombre: {
              required: true,
                latinos: true
             },
            apellido: {
              required: true,
                latinos: true
             },
             edad: {
              required: true,
                digits: true
             },

             sexo: "required",


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
             path_infante:{
                required:true
             },
             nombreTutor: {
              required: true,
                latinos: true
             },
             apellidoTutor: {
              required: true,
                latinos: true
             },
             emailTutor: {
              required: true,
              email: true,
                remote: {
                   url: 'http://localhost:8000/checkmailTutor?emailTutor=' + emailTutor,
                   type: "get"          
               }
             },
             passwordTutor: {
                required: true
             },
             passwordTutor2: {
                required: true,
                equalTo: "#passwordTutor"

             },
             telefonoTutor: {
                required: true,
                digits: true
            },
             estadoTutor: "required",

             ciudadTutor: "required",

             localidadTutor: {
                required: true,
                latinos: true
             },
             postalTutor: {
                required: true,
                digits: true
            }
         
           },
          messages: {
         
            nombreTutor: {
              required: 'El campo nombre es requerido',
                latinos: 'Solo se aceptan letras'
            },
            apellidoTutor: {
              required: 'El campo apellidos es requerido',
                latinos: 'Solo se aceptan letras'
            },
            emailTutor: {
              required: 'El campo email es requerido',
              email:   'Introduzca un email valido ',
                remote: 'El correo ya esta en uso'
                
            },
            passwordTutor: {
                required: 'La contraseña es requerida'
            }, 
            passwordTutor2: {
                required: 'La contraseña es requerida',
                equalTo: 'Las contraseñas deben coincidir'
            },
            estadoTutor: {
              required: '<span class="red-text">El campo estado es requerido</span>'
            },
            ciudadTutor: {
              required: '<span class="red-text">El campo ciudad es requerido</span>'
            },
            telefonoTutor: {
                required: 'El campo telefono es requerido',
                digits: 'Solo se aceptan numeros'
            },
            localidadTutor: {
              required: 'El campo localidad es requerido',
              latinos: 'Solo se aceptan letras'
            },
            postalTutor: {
                required: 'El campo postal es requerido',
                digits: 'Solo se aceptan numeros'
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


       





});