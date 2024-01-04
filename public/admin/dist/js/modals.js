
$(document).ready(function() {
    var base_url= "http://192.168.56.30/codebase443/";
       // Modales de Usuarios
       $('.addUser').on('click',function(){
        $('.modal-body').load( base_url + '/SystemUsers/AddUser/',function(){
            $('#modal-info').modal({show:true});
        });
      });

      $('.editUser').on('click',function(){
        var valor = $(this).data("id");
        $('.modal-body').load( base_url + '/SystemUsers/EditUser/'+ valor,function(){
            $('#modal-info').modal({show:true});
        });
      });
      $('.chanPassUser').on('click',function(){
        var valor = $(this).data("id");
        $('.modal-body').load( base_url + '/SystemUsers/ChangePassUser/'+ valor,function(){
            $('#modal-info').modal({show:true});
        });
      });
      $('.desacUser').on('click',function(){
        var valor = $(this).data("id");
        $('.modal-body').load( base_url + '/SystemUsers/DesUser/'+ valor,function(){
            $('#modal-info').modal({show:true});
        });
      });

      $('.reacUser').on('click',function(){
        var valor = $(this).data("id");
        $('.modal-body').load( base_url + '/SystemUsers/ReacUser/'+ valor,function(){
            $('#modal-info').modal({show:true});
        });
      });
        // Modales de Roles de Usuarios

        $('.addRolUsuario').on('click',function(){
          $('.modal-body').load( base_url + '/usuarios/RolUsuario/',function(){
              $('#modal-info').modal({show:true});
          });
        });

        $('.editRolUsuario').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/usuarios/EditRolUsuario/'+ valor,function(){
              $('#modal-info').modal({show:true});
          });
        });

        $('.desacRolUsuario').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/usuarios/DesRolUsuario/'+ valor,function(){
              $('#modal-info').modal({show:true});
          });
        });
        $('.reacRolUsuario').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/usuarios/ReacRolUsuario/'+ valor,function(){
              $('#modal-info').modal({show:true});
          });
        });
        $('.permisosRol').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/usuarios/PermisosRoles/'+ valor,function(){
              $('#modal-permisos').modal({show:true});
          });
        });

        // Modales de Roles de Usuarios

      // Modales de Usuarios

      // Modales de Sistema
        //Modales de Modulos del sistema
        $('.addModulo').on('click',function(){
          $('.modal-body').load( base_url + '/SystemModulos/AddModulos/',function(){
              $('#modal-info').modal({show:true});
          });
        });
        $('.editModulo').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemModulos/EditModulo/'+ valor,function(){
              $('#modal-info').modal({show:true});
          });
        });
        $('.desacModulo').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemModulos/DesModulo/'+ valor,function(){
              $('#modal-info').modal({show:true});
          });
        });
        $('.reacModulo').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemModulos/ReacModulo/'+ valor,function(){
              $('#modal-info').modal({show:true});
          });
        });
        //Modales de Modulos del sistema
        //Modales de Permisos del sistema
        $('.addPermiso').on('click',function(){
          $('.modal-body').load( base_url + '/SystemPermisos/AddPermiso/',function(){
              $('#modal-info').modal({show:true});
          });
        });
        $('.editPermiso').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemPermisos/EditPermiso/'+ valor,function(){
              $('#modal-info').modal({show:true});
          });
        });
        $('.desacPermiso').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemPermisos/DesPermiso/'+ valor,function(){
              $('#modal-info').modal({show:true});
          });
        });
        $('.reacPermiso').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemPermisos/ReacPermiso/'+ valor,function(){
              $('#modal-info').modal({show:true});
          });
        });
        //Modales de Permisos del sistema

        //Modales de Modulo de Banner
        $('.addBanner').on('click',function(){
          $('.modal-body').load( base_url + '/SystemBanner/AddBanner/',function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.editBanner').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemBanner/EditBanner/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.imagenBanner').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemBanner/ImagenBanner/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.desacBanner').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemBanner/DesBanner/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.reacBanner').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemBanner/ReacBanner/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        //Modales de Modulo de Banner

        //Modales de Modulo de Somos

        $('.btnImagen1').on('click',function(){
          $('.modal-body').load( base_url + '/SystemSomos/AddImagen1/',function(){
              $('#modal-default').modal({show:true});
          });
        });

        $('.btnImagen2').on('click',function(){
          $('.modal-body').load( base_url + '/SystemSomos/AddImagen2/',function(){
              $('#modal-default').modal({show:true});
          });
        });

        //Modales de Modulo de Somos

        //Modales de Modulo de Reseñas pacientes

        $('.addResena').on('click',function(){
          $('.modal-body').load( base_url + '/SystemSomos/AddResenas/',function(){
              $('#modal-default').modal({show:true});
          });
        });

        $('.editResena').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemSomos/EditResena/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.imagenResena').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemSomos/ImagenResena/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.desacResena').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemSomos/DesResena/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.reacResena').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemSomos/ReacResena/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        //Modales de Reseñas pacientes

        //MODALES DE GALERIA DE IMAGENES
        $('.addFotografia').on('click',function(){
          $('.modal-body').load( base_url + '/SystemSomos/AddFotografia/',function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.imagenGaleria').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemSomos/ImagenGaleria/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.desacFotografia').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemSomos/DesFotografia/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.reacFotografia').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemSomos/ReacFotografia/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        //MODALES DE GALERIA DE IMAGENES

        //MODALES DEL MODULO DE BLOG ADMIN

        $('.addBlog').on('click',function(){
          $('.modal-body').load( base_url + '/SystemBlog/AddBlog/',function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.editBlog').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemBlog/EditBlog/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.imagenBlog').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemBlog/ImagenBlog/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.desacBlog').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemBlog/DesBlog/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.reacBlog').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemBlog/ReacBlog/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        //MODALES DEL MODULO DE BLOG ADMIN

        //MODALES DEL MODULO DE SERVICIOS DE CLINICA
        $('.addServicios').on('click',function(){
          $('.modal-body').load( base_url + '/SystemServicios/AddServicio/',function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.editServicio').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemServicios/EditServicio/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.imagenServicio').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemServicios/ImagenServicio/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.desacServicio').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemServicios/DesServicio/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.reacServicio').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemServicios/ReacServicio/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        //MODALES DEL MODULO DE SERVICIOS DE CLINICA

        // MODALES DE MODULO DE ESPECIALIDADES 
        $('.addEspecialidad').on('click',function(){
          $('.modal-body').load( base_url + '/SystemEspecialidades/AddEspecialidad/',function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.editEspecialidad').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemEspecialidades/EditEspecialidad/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.desacEspecialidad').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemEspecialidades/DesEspecialidad/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.reacEspecialidad').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemEspecialidades/ReacEspecialidad/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        // MODALES DE MODULO DE ESPECIALIDADES 

        // MODALES DE MODULO DE MEDICOS
        $('.addMedicos').on('click',function(){
          $('.modal-body').load( base_url + '/SystemMedicos/AddMedicos/',function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.editMedico').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemMedicos/EditMedico/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.imagenMedico').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemMedicos/ImagenMedico/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.desacMedico').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemMedicos/DesMedico/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        $('.reacMedico').on('click',function(){
          var valor = $(this).data("id");
          $('.modal-body').load( base_url + '/SystemMedicos/ReacMedico/'+ valor,function(){
              $('#modal-default').modal({show:true});
          });
        });
        // MODALES DE MODULO DE MEDICOS

      // Modales de Sistema

});
