<?php
/**
* Interface for classes implementing generation of remote ids
*
* @package ezcontentstaging
*
* @version $Id$;
*
* @author
* @copyright
* @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
*/

class eZContentStagingSameRemoteIdGenerator implements eZContentStagingRemoteIdGenerator
{
    function __construct( $target )
    {
    }

    /**
    * Uses the same remote id on source and on target server
    */
    function buildRemoteId( $sourceId, $sourceRemoteId, $type='node' )
    {
        return $sourceRemoteId;
    }
}

?>