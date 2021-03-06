<?php

namespace spec\Rs\Issues\Gitlab;

use PhpSpec\ObjectBehavior;

class GitlabIssueSpec extends ObjectBehavior
{
    private $data = array(
        'title'       => 'foo bar',
        'iid'         => 42,
        'description' => 'lorem ipsum',
        'state'       => 'open',
        'created_at'  => '25.05.1981 13:37:42',
        'closed_at'   => null,
        'assignee'    => array('username' => 'digitalkaoz'),
        'author'      => array('username' => 'lolcat')
    );

    public function let()
    {
        $this->beConstructedWith($this->data, 'issue', 'http://foo.com');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('Rs\Issues\Gitlab\GitlabIssue');
        $this->shouldHaveType('Rs\Issues\Issue');
    }

    public function it_returns_the_title()
    {
        $this->getTitle()->shouldReturn('foo bar');
    }

    public function it_returns_the_text()
    {
        $this->getText()->shouldReturn('lorem ipsum');
    }

    public function it_returns_the_owner()
    {
        $this->getOwner()->shouldReturn('lolcat');
        $this->getOwnerUrl()->shouldReturn('http://foo.com/u/lolcat');
    }

    public function it_returns_the_assignee()
    {
        $this->getAssignee()->shouldReturn('digitalkaoz');
        $this->getAssigneeUrl()->shouldReturn('http://foo.com/u/digitalkaoz');
    }

    public function it_returns_the_url()
    {
        $this->getUrl()->shouldReturn('http://foo.com/issues/42');
    }

    public function it_returns_the_state()
    {
        $this->getState()->shouldReturn('open');
    }

    public function it_returns_the_type()
    {
        $this->getType()->shouldReturn('issue');
    }

    public function it_returns_the_create_date_as_DateTime()
    {
        $this->getCreatedAt()->shouldHaveType('\DateTime');
    }

    public function it_returns_the_closed_date_as_DateTime_if_set()
    {
        $this->getClosedAt()->shouldReturn(null);
    }

    public function it_returns_the_comment_count()
    {
        $this->getCommentCount()->shouldReturn(null);
    }

    public function it_can_return_the_raw_data_from_gitlab()
    {
        $this->getRaw()->shouldReturn($this->data);
    }

}
