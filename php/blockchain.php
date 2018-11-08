<?php
    function add_block($url,$id,$state,$type){
        $data = array(
            "id"=>$id,
            "etat"=>$state,
            "type"=>$type,
            "date"=> date("Y-m-d H:i:s")
        );
        $index = getIndex();
        $previousHash = previousHash();
        $timestamp = time();
        $data_json=json_encode($data);
        $hash = hash('md4',"$index$previousHash$timestamp$data_json");
        $block = array(
            "index"=>$index,
            "previousHash"=>$previousHash,
            "timestamp"=>$timestamp,
            "data"=>$data,
            "hash"=>$hash
        );
        $block_json=json_encode($block);
        shell_exec("curl -H \"Content-type:application/json\" --data '{\"data\" : \"$block_json\"}' $url/mineBlock");
    }
    function get_blockchain($url){
        shell_exec("curl $url/blocks");
    }
    function add_peer($url, $peer){
        shell_exec("curl -H \"Content-type:application/json\" --data '{\"peer\" : \"$peer\"}' $url/addPeer");
    }
    function get_peers($url){
        shell_exec("curl $url/peers");
    }
    function getIndex(){
        return 0;
    }
    function previousHash(){
        return "NOP";
    }
?>