<?php

namespace Message\Mothership\ReferAFriend\Reward\Config\Trigger;

use Message\Mothership\ReferAFriend\Reward\AbstractEntityCollectionBuilder;
use Message\Mothership\ReferAFriend\Reward\Type;

/**
 * Class CollectionBuilder
 * @package Message\Mothership\ReferAFriend\Reward\Config\Trigger
 *
 * @author Thomas Marchant <thomas@mothership.ec>
 *
 * Class for creating a collection of triggers against a specific type of reward configuration
 */
class CollectionBuilder extends AbstractEntityCollectionBuilder
{
	/**
	 * {@inheritDoc}
	 */
	public function getCollection()
	{
		return new Collection;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getCollectionFromType(Type\TypeInterface $type)
	{
		$collection = $this->getCollection();

		foreach ($this->_completeCollection as $entity) {
			if (!$entity instanceof TriggerInterface) {
				throw new \LogicException('Entity must be an instance of TriggerInterface!');
			}

			if (in_array($entity->getName(), $type->validTriggers())) {
				$collection->add($entity);
			}
		}

		return $collection;
	}
}