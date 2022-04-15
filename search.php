<?php
Class Search
{

    function __construct(){}

    public function searchAll($search)
    {
        $sql = "SELECT * FROM products WHERE INSTR( product_name , :search )
                OR INSTR( product_description, :search);
                SELECT * FROM products WHERE INSTR( category_id, :search );
                SELECT * FROM products WHERE INSTR( subcategory_id , :search);";

        $params = [':search' => $search];
    }
}
?>