<?php
namespace TravisLykes\BookStoreApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Travis Lykes <fopokuamoako@gmail.com>
 */
class CountryControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \TravisLykes\BookStoreApp\Controller\CountryController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\TravisLykes\BookStoreApp\Controller\CountryController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCountriesFromRepositoryAndAssignsThemToView()
    {

        $allCountries = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $countryRepository = $this->getMockBuilder(\TravisLykes\BookStoreApp\Domain\Repository\CountryRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $countryRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCountries));
        $this->inject($this->subject, 'countryRepository', $countryRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('countries', $allCountries);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCountryToView()
    {
        $country = new \TravisLykes\BookStoreApp\Domain\Model\Country();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('country', $country);

        $this->subject->showAction($country);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCountryToCountryRepository()
    {
        $country = new \TravisLykes\BookStoreApp\Domain\Model\Country();

        $countryRepository = $this->getMockBuilder(\TravisLykes\BookStoreApp\Domain\Repository\CountryRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $countryRepository->expects(self::once())->method('add')->with($country);
        $this->inject($this->subject, 'countryRepository', $countryRepository);

        $this->subject->createAction($country);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCountryToView()
    {
        $country = new \TravisLykes\BookStoreApp\Domain\Model\Country();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('country', $country);

        $this->subject->editAction($country);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCountryInCountryRepository()
    {
        $country = new \TravisLykes\BookStoreApp\Domain\Model\Country();

        $countryRepository = $this->getMockBuilder(\TravisLykes\BookStoreApp\Domain\Repository\CountryRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $countryRepository->expects(self::once())->method('update')->with($country);
        $this->inject($this->subject, 'countryRepository', $countryRepository);

        $this->subject->updateAction($country);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCountryFromCountryRepository()
    {
        $country = new \TravisLykes\BookStoreApp\Domain\Model\Country();

        $countryRepository = $this->getMockBuilder(\TravisLykes\BookStoreApp\Domain\Repository\CountryRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $countryRepository->expects(self::once())->method('remove')->with($country);
        $this->inject($this->subject, 'countryRepository', $countryRepository);

        $this->subject->deleteAction($country);
    }
}
