<?php 
	 if (!class_exists("ISTT_Html")) {
	 	class ISTT_Html {

		public static function parse_attributes($attributes = array()){

			$attribute = "";
			if (count($attributes) != 0) {
				foreach ($attributes as $key => $value) {
					$attribute .= " $key='{$value}'"; 
				}
				return $attribute;
			}

			return "";
		}


		// elements


		// division
		public static function div($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<div {$attribute}>".(empty($content)?"":$content)."</div>";
		}

		public static function div_start($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<div {$attribute}>";
		}

		public static function div_end(){
			return "</div>";
		}
		// division
	

		// form
		public static function form($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<form {$attribute}>".(empty($content)?"":$content)."</form>";
		}

		public static function form_start($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<form {$attribute}>";
		}

		public static function form_end(){
			return "</form>";
		}

		// form

		public static function ul($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<ul {$attribute}>".(empty($content)?"":$content)."</ul>";
		}

		public static function ul_start($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<ul {$attribute}>";
		}

		public static function ul_end(){
			return "</ul>";
		}

		public static function li_start($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<li {$attribute}>";
		}

		public static function li_end(){
			return "</li>";
		}

		public static function li($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<li {$attribute}>".(empty($content)?"":$content)."</li>";
		}

		public static function textarea($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<textarea {$attribute} >".(empty($content)?"":$content)."</textarea>";
		}

		public static function label($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<label {$attribute} >".(empty($content)?"":$content)."</label>";
		}

		public static function button($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<button {$attribute} >".(empty($content)?"":$content)."</button>";
		}

		public static function input($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<input {$attribute} >".(empty($content)?"":$content)."</input>";
		}


		// table
		public static function table($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<table {$attribute} >".(empty($content)?"":$content)."</table>";
		}

		public static function table_start($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<table {$attribute}>";
		}

		public static function table_end(){
			return "</table>";
		}
		// table

		// thead
		public static function thead($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<thead {$attribute} >".(empty($content)?"":$content)."</thead>";
		}

		public static function thead_start($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<thead {$attribute}>";
		}

		public static function thead_end(){
			return "</thead>";
		}
		// thead

		// tbody
		public static function tbody($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<tbody {$attribute} >".(empty($content)?"":$content)."</tbody>";
		}

		public static function tbody_start($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<tbody {$attribute}>";
		}

		public static function tbody_end(){
			return "</tbody>";
		}
		// tbody

		// tfoot
		public static function tfoot($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<tfoot {$attribute} >".(empty($content)?"":$content)."</tfoot>";
		}

		public static function tfoot_start($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<tfoot {$attribute}>";
		}

		public static function tfoot_end(){
			return "</tfoot>";
		}
		// tfoot




		
		// tr
		public static function tr($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<tr {$attribute} >".(empty($content)?"":$content)."</tr>";
		}

		public static function tr_start($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<tr {$attribute}>";
		}

		public static function tr_end(){
			return "</tr>";
		}

		// tr

		// td
		public static function td($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<td {$attribute} >".(empty($content)?"":$content)."</td>";
		}

		public static function td_start($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<td {$attribute}>";
		}

		public static function td_end(){
			return "</td>";
		}
		// td

		// th
		public static function th($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<th {$attribute} >".(empty($content)?"":$content)."</th>";
		}

		public static function th_start($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<th {$attribute}>";
		}

		public static function th_end(){
			return "</th>";
		}
		// th

		public static function span($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<span {$attribute} >".(empty($content)?"":$content)."</span>";
		}

		public static function p($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<p {$attribute} >".(empty($content)?"":$content)."</p>";
		}

		public static function blockquote($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<blockquote {$attribute} >".(empty($content)?"":$content)."</blockquote>";
		}

		public static function h($count=1,$content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<h{$count} {$attribute} >".(empty($content)?"":$content)."</h{$count}>";
		}

		public static function img($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<img {$attribute} >";
		}

		public static function hr($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<hr {$attribute} >";
		}

		public static function br($attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<br {$attribute} >";
		}

		public static function a($content="",$attribute=array()){
			$attribute = self::parse_attributes($attribute);
			return "<a {$attribute} >".(empty($content)?"":$content)."</a>";
		}




	 }
	 }


 ?>