<?php

namespace Message\Mothership\ReferAFriend\Reward;

/**
 * Class AbstractEntityCollectionBuilder
 * @package Message\Mothership\ReferAFriend\Referral
 *
 * @author Thomas Marchant <thomas@mothership.ec>
 */
abstract class AbstractEntityCollectionBuilder implements EntityCollectionBuilderInterface
{
	/**
	 * @var EntityCollectionInterface
	 */
	protected $_completeCollection;

	public function __construct(EntityCollectionInterface $completeCollection)
	{
		$this->_completeCollection = $completeCollection;
	}
}