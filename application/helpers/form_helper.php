<?php


if ( ! function_exists('getSelectField'))
{

  function getSelectField($label = '',$name = '' , $required = true ,$classnames = '' , $id = '' , $arr = '',$column = 6)
	{

      $is_requied = $required === true ?  'required': "";


      // for extra attributes
      $extra_attr = '';

     if (!empty($arr)) {

       $attr = explode(',',$arr);

       foreach ($attr as $k => $v)
       {

         $extra_attr .= $v.' ';

       }


     }

     // for extra classes
      $extra_classes = '';
      if (!empty($classnames)) {

        $attr = explode(',',$classnames);

        foreach ($attr as $k => $v)
        {

          $extra_classes .= $v.' ';

        }


      }

      $form_col = '<div class="col-md-'.$column.' mb-3">'.
                     '<label for="'. ucfirst($label) .'" class="form-label">'. ucfirst($label) .'</label>'.
                     '<select class="form-select form-select-sm'. $extra_classes .'" name="'.$name.'" id="'.$id.'" '.$is_requied.'>'.
                              '<option value="">select</option>'.
                              '<option value="option1">option1</option>'.
                      '</select>'.
                  '</div>';

      return $form_col;

	}

}

if ( ! function_exists('getInputField'))
{

  function getInputField($label = '',$type = '',$name = '' , $required = true , $value = '' ,$classnames = '' , $id = '' , $arr = '',$column = 6)
	{

      $is_requied = $required === true ?  'required': "";


      // for extra attributes
      $extra_attr = '';

     if (!empty($arr)) {

       $attr = explode(',',$arr);

       foreach ($attr as $k => $v)
       {

         $extra_attr .= $v.' ';

       }


     }

     // for extra classes
      $extra_classes = '';
      if (!empty($classnames)) {

        $attr = explode(',',$classnames);

        foreach ($attr as $k => $v)
        {

          $extra_classes .= $v.' ';

        }


      }

      $form_col = '<div class="col-md-'.$column.' mb-3">'.
                     '<label for="'. ucfirst($label) .'" class="form-label">'. ucfirst($label) .'</label>'.
                     '<input type="'. $type .'" class="form-control form-control-sm '. $extra_classes .'" name="'.$name.'" id="'. $id .'" '.$is_requied.' '.$extra_attr.' value="'.$value.'">'.
                  '</div>';

      return $form_col;

	}

}


if ( ! function_exists('getImgField'))
{

  function getImgField($btn_txt = '',$img_url = '')
	{

      if(!empty($img_url))
      {

        $img_url = base_url('assets/images/avatars/01.png');

      }

      $form_img = '<div class="row">'.
                    '<div class="col-sm-12">'.
                      '<img src="'. $img_url .'" class="img-thumbnail user-form-img" alt="...">'.
                      '<input type="file" class="choose_img" style="display:none;">'.
                    '</div>'.
                    '<div class="col-sm-12 mt-4" style="margin-left:10px;">'.
                      '<button type="button" class="btn btn-sm btn-outline-primary select_img_">'.$btn_txt.'</button>'.
                    '</div>'.
                  '</div>';

      return $form_img;

	}

}

if ( ! function_exists('getTextareaField'))
{

  function getTextareaField($label = '',$name = '' , $required = true , $value = '' ,$classnames = '' , $id = '',$column = 6)
	{

      $is_requied = $required === true ?  'required': "";

     // for extra classes
      $extra_classes = '';
      if (!empty($classnames)) {

        $attr = explode(',',$classnames);

        foreach ($attr as $k => $v)
        {

          $extra_classes .= $v.' ';

        }


      }

      $form_txtArea = '<div class="mb-3 col-sm-'.$column.'">'.
                          '<label for="'. ucfirst($label) .'" class="form-label">'. ucfirst($label) .'</label>'.
                          '<textarea name="'.$name.'" class="form-control '.$extra_classes.'" aria-label="With textarea" id="'. $id .'" '.$is_requied.'>'.$value.'</textarea>'.
                        '</div>';

      return $form_txtArea;



	}

}


if ( ! function_exists('getSubmitBtn'))
{

  function getSubmitBtn($btn_txt = '')
	{

      $form_btn = '<div class="col-12">
                    <button class="btn btn-sm btn-primary" type="submit">'. $btn_txt .'</button>
                  </div>';

      return $form_btn;



	}

}


if ( ! function_exists('getHiddenField'))
{

  function getHiddenField($name = '', $value = '' ,$classnames = '' , $id = '')
	{

    // for extra classes
     $extra_classes = '';
     if (!empty($classnames)) {

       $attr = explode(',',$classnames);

       foreach ($attr as $k => $v)
       {

         $extra_classes .= $v.' ';

       }


     }

      $form_hidden = '<input type="hidden" class="'. $extra_classes .'" name="'.$name.'" id="'. $id .'" value="'.$value.'">';

      return $form_hidden;

	}

}

if ( ! function_exists('viewDetailsCol'))
{

  function viewDetailsCol($label, $val,$column = 4)
	{

      $col = '<div class="col-sm-'.$column.'"><label for="'.ucfirst($label).'">'.ucfirst($label).'</label><p class="view-details-txt">'.$val.'</p></div>';

      return $col;

	}

}
