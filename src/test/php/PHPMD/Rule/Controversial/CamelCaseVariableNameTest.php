<?php
/**
 * This file is part of PHP Mess Detector.
 *
 * Copyright (c) Manuel Pichler <mapi@phpmd.org>.
 * All rights reserved.
 *
 * Licensed under BSD License
 * For full copyright and license information, please see the LICENSE file.
 * Redistributions of files must retain the above copyright notice.
 *
 * @author Manuel Pichler <mapi@phpmd.org>
 * @copyright Manuel Pichler. All rights reserved.
 * @license https://opensource.org/licenses/bsd-license.php BSD License
 * @link http://phpmd.org/
 */

namespace PHPMD\Rule\Controversial;

use PHPMD\AbstractTest;

/**
 * Test case for the camel case variable name rule.
 *
 * @covers \PHPMD\Rule\Controversial\CamelCaseVariableName
 * @group phpmd
 * @group phpmd::rule
 * @group phpmd::rule::controversial
 * @group unittest
 */
class CamelCaseVariableNameTest extends AbstractTest
{
    /**
     * Tests that the rule does apply for an invalid variable name
     * @return void
     */
    public function testRuleDoesApplyForInvariableNameWithUnderscore()
    {
        $report = $this->getReportMock(1);

        $rule = new CamelCaseVariableName();
        $rule->setReport($report);
        $rule->apply($this->getClass());
    }

    /**
     * Tests that the rule does apply for an invalid variable name
     * starting with a capital.
     *
     * @return void
     */
    public function testRuleDoesApplyForVariableNameWithCapital()
    {
        $report = $this->getReportMock(1);

        $rule = new CamelCaseVariableName();
        $rule->setReport($report);
        $rule->apply($this->getClass());
    }

    /**
     * Tests that the rule does NOT apply for a valid variable name
     *
     * @return void
     */
    public function testRuleDoesNotApplyForValidVariableName()
    {
        $report = $this->getReportMock(0);

        $rule = new CamelCaseVariableName();
        $rule->setReport($report);
        $rule->apply($this->getClass());
    }

    /**
     * Tests that the rule does NOT apply for a statically accessed variable
     *
     * @return void
     */
    public function testRuleDoesNotApplyForStaticVariableAccess()
    {
        $report = $this->getReportMock(0);

        $rule = new CamelCaseVariableName();
        $rule->setReport($report);
        $rule->apply($this->getClass());
    }
}
