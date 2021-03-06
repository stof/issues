<?php

namespace Rs\Issues;

/**
 * Issue
 * @author Robert Schönthal <robert.schoenthal@gmail.com>
 */
interface Issue
{
    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getText();

    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @return \DateTime|null
     */
    public function getClosedAt();

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt();

    /**
     * @return string
     */
    public function getState();

    /**
     * @return int
     */
    public function getCommentCount();

    public function getAssignee();

    public function getNumber();

    public function getOwner();

    public function getOwnerUrl();

    public function getAssigneeUrl();

    public function getType();
}
