<?php
/*** Reglas de validacion para formularios** */
$config = array( // dentro de  este arreglo van las validaciones de los formularios
    /**reglas para el formulario add_formulario */

    /** VALIDAR INGRESO DE UN NUEVO USUARIO **/
    'valida_nuevo_usuario'  => array
    (
        array(
            'field' => 'nombres',
            'label' => 'Nombres', /*Nombre de la etiqueta que aparecerá en el mensaje*/
            'rules' => 'required|is_string|trim|min_length[3]|max_length[30]',
        ), //trim.- Elimina espacios en blanco al incio y al final de los datos ingresados en un formulario o campo de form.

        array(
            'field' => 'apellidos',
            'label' => 'Apellidos', /*Nombre de la etiqueta que aparecerá en el mensaje*/
            'rules' => 'required|is_string|trim|min_length[3]|max_length[30]',
        ), //trim.- Elimina espacios en blanco al incio y al final de los datos ingresados en un formulario o campo de form.

        array(
            'field' => 'correo',
            'label' => 'Correo', /*Nombre de la etiqueta que aparecerá en el mensaje*/
            'rules' => 'required|is_string|trim',
        ), //trim.- Elimina espacios en blanco al incio y al final de los datos ingresados en un formulario o campo de form.
        array(
            'field' => 'alias',
            'label' => 'Alias', /*Nombre de la etiqueta que aparecerá en el mensaje*/
            'rules' => 'required',
        ), //trim.- Elimina espacios en blanco al incio y al final de los datos ingresados en un formulario o campo de form.
       
    ),

    /** VALIDAR INGRESO DE UN NUEVO USUARIO **/
    'valida_editar_usuario' => array
    (
        array(
            'field' => 'nombres',
            'label' => 'Nombres', /*Nombre de la etiqueta que aparecerá en el mensaje*/
            'rules' => 'required|is_string|trim|min_length[3]|max_length[30]',
        ), //trim.- Elimina espacios en blanco al incio y al final de los datos ingresados en un formulario o campo de form.

        array(
            'field' => 'apellidos',
            'label' => 'Apellidos', /*Nombre de la etiqueta que aparecerá en el mensaje*/
            'rules' => 'required|is_string|trim|min_length[3]|max_length[30]',
        ), //trim.- Elimina espacios en blanco al incio y al final de los datos ingresados en un formulario o campo de form.

        array(
            'field' => 'cedula',
            'label' => 'Cedula', /*Nombre de la etiqueta que aparecerá en el mensaje*/
            'rules' => 'required|is_string|trim|min_length[10]|max_length[10]',
        ), //trim.- Elimina espacios en blanco al incio y al final de los datos ingresados en un formulario o campo de form.
        array(
            'field' => 'usuario',
            'label' => 'Alias', /*Nombre de la etiqueta que aparecerá en el mensaje*/
            'rules' => 'required',
        ), //trim.- Elimina espacios en blanco al incio y al final de los datos ingresados en un formulario o campo de form.
        //array(
        //  'field' => 'select_rol',
        //'label' => 'Rol', /*Nombre de la etiqueta que aparecerá en el mensaje*/
        //'rules' => 'required',
        /*),*///trim.- Elimina espacios en blanco al incio y al final de los datos ingresados en un formulario o campo de form.*/
        //),
    ),
    /** VALIDAR INGRESO DE UN NUEVO USUARIO **/
    'valida_rol'            => array
    (
        array(
            'field' => 'rol',
            'label' => 'Rol', /*Nombre de la etiqueta que aparecerá en el mensaje*/
            'rules' => 'required|is_string|trim|min_length[3]|max_length[30]',
        ), //trim.- Elimina espacios en blanco al incio y al final de los datos ingresados en un formulario o campo de form.

    ),

); //éste es el final
