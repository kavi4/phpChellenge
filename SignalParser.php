<?

/**
 * Interface for parse commands in most formats
 */

interface ISignalParser{

   	public function parsePosition  ($strPosition);
   	public function deParsePosition($position);
   	public function parseCommands  ($sting,$rover);
}
?>