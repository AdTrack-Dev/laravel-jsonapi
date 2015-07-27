<?php namespace EchoIt\JsonApi;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\Relations\Pivot as Pivot;

/**
 * This class is used to extend models from, that will be exposed through
 * a JSON API.
 *
 * @author Ronni Egeriis Persson <ronni@egeriis.me>
 */
interface ModelInterface
{

    /**
     * Get the model's default exposed relations
     *
     * @return  Array
     */
    public function defaultExposedRelations();

    /**
     * Get the model's exposed relations
     *
     * @return  Array
     */
    public function exposedRelations();

    /**
     * Set this model's exposed relations
     *
     * @param  Array  $relations
     */
    public function setExposedRelations(Array $relations);

    /**
     * Get the model's relations that are from methods
     *
     * @return  Array
     */
    public function relationsFromMethod();

    /**
     * mark this model as changed
     *
     * @return  void
     */
    public function markChanged($changed = true);

    /**
     * has this model been changed
     *
     * @return  void
     */
    public function isChanged();

    /**
     * Get the resource type of the model
     *
     * @return  string
     */
    public function getResourceType();

    /**
     * Convert the model instance to an array. This method overrides that of
     * Eloquent to prevent relations to be serialize into output array.
     *
     * @return array
     */
    public function toArray();
}
