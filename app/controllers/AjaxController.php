<?php
	
	class AjaxController extends HomeController {

		public function list_shop($param){
			$sl = Shoppinglist::where('kode_sl' , 'LIKE' , $param."%")->get();

			if($sl->count() > 0){
				$strHTML = "<select class=\"form-control chosen\" id=\"sl-list\" name=\"shopping_list\" required>";
				$strHTML="";
				foreach ($sl as $list) {
					$strHTML .= "<option value=\"".$list->kode_sl."\">".$list->kode_sl."</option>";
				}
				$strHTML .= "</select>";
				return Response::json($strHTML);
			} else {
				return Response::json("");
			}
		}

	}

?>