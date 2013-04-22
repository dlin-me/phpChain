phpChain
====================



This class allows calling PHP system functions in a chain. For example:

echo Chain::with(' ok ')->trim()->strtoupper()->chainVal;

is the same as:

echo strtoupper(trim(' ok '));





Example1:
---------------------

Chain::with(array(1,2,3))->array_pop()->ifReturnedValue('==',3)->array_pop->chainEndIf->print_r;

Equals to :

$a = array(1,2,3); $result = array_pop($a); if($a == 3){ array_pop($a); print_r($a) }

Example2:
---------------------
Chain::with('abcdeft')->strpos('d')->ifReturnedValue('==', 4)->print_r0('hello')->chainElse->print_r0('world')->chainEndIf;

if(strpos('abcdeft', 'd') == 4){
    print_r('hello');
}else{
    print_r('world');
}
