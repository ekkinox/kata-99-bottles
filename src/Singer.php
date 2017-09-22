<?php declare(strict_types = 1);

namespace Ekkinox\KataBottles;

/**
 * @package Ekkinox\KataBottles
 */
class Singer
{
	/**
	 * @return array
	 */
	public function sing(): array
	{
		$song = [];

		for ($i = 99; $i > 1; $i--)
		{
			$song[] = sprintf('%d bottles of beer on the wall, %d bottles of beer.', $i, $i);
			$song[] = sprintf(
				'Take one down and pass it around, %d %s of beer on the wall.',
				$i-1,
				$i == 2 ? 'bottle' : 'bottles'
			);
		}

		$song[] = '1 bottle of beer on the wall, 1 bottle of beer.';
		$song[] = 'Take one down and pass it around, no more bottles of beer on the wall.';
		$song[] = 'No more bottles of beer on the wall, no more bottles of beer.';
		$song[] = 'Go to the store and buy some more, 99 bottles of beer on the wall.';

		return $song;
	}
}
