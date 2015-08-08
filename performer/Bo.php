<?php
/**
 * Created by PhpStorm.
 * User: Bali
 * Date: 2015.08.08.
 * Time: 15:45
 */

namespace Performer;


use Database\Adapter;

class Bo implements \EntityInterface
{
    /**
     * @var DataObject
     */
    protected $do;

    /**
     * @var DetailsDataObject
     */
    protected $detailsDo;

    /**
     * @var Adapter
     */
    protected $dbAdapter;

    /**
     * @param DataObject $dataObject
     */
    public function setDo(DataObject $dataObject)
    {
        $this->do = $dataObject;
    }

    /**
     * @param DetailsDataObject $detailsDataObject
     */
    public function setDetailsDo(DetailsDataObject $detailsDataObject)
    {
        $this->detailsDo = $detailsDataObject;
    }

    /**
     * @param Adapter $dbAdapter
     */
    public function setDbAdapter(Adapter $dbAdapter)
    {
        $this->dbAdapter = $dbAdapter;
    }
}