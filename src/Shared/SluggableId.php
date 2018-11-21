<?php
/**
 *     ___                 __  _  _        _      ___    __
 *    / __\  ___   _ __   / _|| |(_)  ___ | |_   / _ \  /__\
 *   / /    / _ \ | '_ \ | |_ | || | / __|| __| / /_)/ /_\
 *  / /___ | (_) || | | ||  _|| || || (__ | |_ / ___/ //__
 *  \____/  \___/ |_| |_||_|  |_||_| \___| \__|\/     \__/
 *
 *
 *  Copyright (C) 2018 Conflict Network.
 *
 *  This is private software, you cannot redistribute and/or modify it in any way
 *  unless given explicit permission to do so. If you have not been given explicit
 *  permission to view or modify this software you should take the appropriate actions
 *  to remove this software from your device immediately.
 *
 * @author Jack Noordhuis
 *
 *
 */

declare(strict_types=1);

namespace ConflictNetwork\Common\Contracts\Shared;

/**
 * A sluggable id consists of two parts, an integer identifier that is only ever used internally and a hash representation of
 * that identifier for use in urls as a slug. This avoids exposing the internal identifier as a preventative security measure.
 */
interface SluggableId {

	/**
	 * Get the hash identifier.
	 *
	 * @return string
	 */
	public function getHashId() : string;

	/**
	 * Get the internal identifier.
	 *
	 * @return int
	 */
	public function getInternalId() : int;

	/**
	 * Check if the internal integer id is present/valid.
	 *
	 * @return bool
	 */
	public function hasValidInternalId() : bool;

	/**
	 * Compare two ids. This method should be used in comparisons in case any internal
	 * id representation changes.
	 *
	 * @param \ConflictNetwork\Common\Contracts\Shared\SluggableId $id
	 *
	 * @return bool
	 */
	public function equals(SluggableId $id) : bool;

	/**
	 * Get the base contract for use in comparison checks.
	 *
	 * @return string
	 */
	public function getBaseContract() : string;

}