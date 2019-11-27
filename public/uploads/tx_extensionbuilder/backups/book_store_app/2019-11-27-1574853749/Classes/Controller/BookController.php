<?php
namespace TravisLykes\BookStoreApp\Controller;


/***
 *
 * This file is part of the "Book Store App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Travis Lykes <fopokuamoako@gmail.com>, Ho
 *
 ***/
/**
 * BookController
 */
class BookController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * bookRepository
     * 
     * @var \TravisLykes\BookStoreApp\Domain\Repository\BookRepository
     */
    protected $bookRepository = null;

    /**
     * @param \TravisLykes\BookStoreApp\Domain\Repository\BookRepository $bookRepository
     */
    public function injectBookRepository(\TravisLykes\BookStoreApp\Domain\Repository\BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $books = $this->bookRepository->findAll();
        $this->view->assign('books', $books);
    }

    /**
     * action show
     * 
     * @param \TravisLykes\BookStoreApp\Domain\Model\Book $book
     * @return void
     */
    public function showAction(\TravisLykes\BookStoreApp\Domain\Model\Book $book)
    {
        $this->view->assign('book', $book);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \TravisLykes\BookStoreApp\Domain\Model\Book $newBook
     * @return void
     */
    public function createAction(\TravisLykes\BookStoreApp\Domain\Model\Book $newBook)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookRepository->add($newBook);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \TravisLykes\BookStoreApp\Domain\Model\Book $book
     * @ignorevalidation $book
     * @return void
     */
    public function editAction(\TravisLykes\BookStoreApp\Domain\Model\Book $book)
    {
        $this->view->assign('book', $book);
    }

    /**
     * action update
     * 
     * @param \TravisLykes\BookStoreApp\Domain\Model\Book $book
     * @return void
     */
    public function updateAction(\TravisLykes\BookStoreApp\Domain\Model\Book $book)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookRepository->update($book);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \TravisLykes\BookStoreApp\Domain\Model\Book $book
     * @return void
     */
    public function deleteAction(\TravisLykes\BookStoreApp\Domain\Model\Book $book)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookRepository->remove($book);
        $this->redirect('list');
    }
}
