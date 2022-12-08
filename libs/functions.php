<?php

function recursiveOption($data, $selected, $parent = 0, $str = "")
{
    foreach ($data as $key => $value) {
        if ($value["parent"] == $parent) {
            $selected_option = '';
            if ($value["id"] == $selected) {
                $selected_option = "selected";
            }
            $id   = $value["id"];
            $name = $value["name"];
            echo "<option value='$id' $selected_option>$str $name</option>";
            unset($data[$key]);

            recursiveOption($data, $selected, $value["id"], $str."---|");
        }

    }
}

function recursiveTable ($data,$parent = 0, $str = "") {
    foreach ($data as $key => $value) {
        if ($value["parent"] == $parent) {
            echo '
                        <tr>
                            <td>'.$str.' '.$value["name"].'</td>
                            <td><a onclick="return checkDelete(\'Bạn có chắc chắn muốn xóa thể loại này không?\')" href="index.php?module=category&action=delete&id='.$value["id"].'">Xóa</a></td>
                            <td><a href="index.php?module=category&action=edit&id='.$value["id"].'">Sửa</a></td>
                        </tr>
                    ';
            unset($data[$key]);

            recursiveTable ($data,$value["id"], $str ."---|");
        }
    }
}