<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BookModal extends ModalComponent
{
    protected \stdClass $modalContent;

    public function mount(string $book, bool $showImage = true)
    {
        $this->modalContent = $this->getContentForModal($book, $showImage);
    }

    public function render()
    {
        return view('livewire.book-modal')->with(['modalContent' => $this->modalContent]);
    }

    private function getContentForModal(string $book, bool $showImage)
    {
        $content = new \stdClass();

        $content->showImage = $showImage;

        if (str_contains($book, 'book1')) {
            $content->bookTitle = 'STANDARD EDITION';
            $content->bookSubHeading = 'EVERYONE HAS A STYLE OF FIGHTING, BUT <br> NOT EVERYONE CAN FIGHT WITH STYLE!';
            $content->bookImage = "\img/content/book-cover-1.jpg";
            $content->bookIntro = 'THE FIRST NOVEL IN THE RAGING DESTINY SERIES IS NOW ON SALE!';
            $content->bookText = "At the dawn of time, Planet Gaia’s mightiest champions fought the hideous SHADE in a terrible war. <br><br>
Two millennia later the shadows of the SHADE are stirring again and it is now the task of Gaia’s present warriors to face the darkness.<br><br>
SLIDER, a young martial artist with the ability to control lightning. CRYSTAL, an advanced artificial intelligence hologram. GWENDOLYN, a powerful sorceress of light awakened from a deep sleep. RAYGAN, a foul-mouthed marksman, always ready for a fight and ever backed up by his partner KESTREL. <br><br>
They travel the beautiful and dangerous world of Gaia with the hope of sealing the SHADE away for good. Yet a power struggle unfolds, as the world's enemies, old and new, look to complicate their quest and further their own malicious intent. <br><br>
In this action-packed martial arts fantasy fiction, discover if the sacrifices of the past have been too long forgotten in this scramble for power and the truth.";
            $content->bookButtonText = $showImage ? 'Available in standard paperback or hardback signature editions. <br><br> Check the SHOP for more Raging Destiny Merchandise available now.' : '';

            if ($content->showImage) {
                $standardEditionButton = new \stdClass();
                $standardEditionButton->text = 'STANDARD';
                $standardEditionButton->type = "standard";
                $content->bookButtons[] = $standardEditionButton;

                $signatureEditionButton = new \stdClass();
                $signatureEditionButton->text = 'SIGNATURE';
                $signatureEditionButton->type = "signature";
                $content->bookButtons[] = $signatureEditionButton;
            } else {
                $standardEditionButton = new \stdClass();
                $standardEditionButton->text = 'Buy Now';
                $standardEditionButton->type = "standard";
                $content->bookButtons[] = $standardEditionButton;
            }

        } else if (str_contains($book, 'book2')){
            $content->bookTitle = 'In Production...';
            $content->bookSubHeading = 'THERE ARE TWO SIDES TO EVERY STORY, <br> THEN THERE IS THE TRUTH';
            $content->bookImage = "\img/content/book-cover-2.jpg";
            $content->bookIntro = 'The second novel in the Raging Destiny series is now in development.';
            $content->bookText = "The story continues two years after the events of Raging Destiny. <br><br>
                                  Promising to bring the same hard hitting action and deep character development established in the first novel.<br><br>
                                  Raging Destiny 2: Undying Pain will dive deep into the other side of the story hidden aware from the reader in
                                  the first novel and change what you believed to be the truth in the world of Gaia and the people of Sanctuary City.";
            $content->bookButtonText = 'Check back often for progress updates right here at RagingDestiny.com. <br><br>
                                        Register your interest and secure your copy first day of release below.';

            $signatureEditionButton = new \stdClass();
            $signatureEditionButton->text = 'REGISTER INTEREST';
            $signatureEditionButton->type = "book2";
            $content->bookButtons[] = $signatureEditionButton;
        } else {
            $content->bookTitle = 'SIGNATURE EDITION';
            $content->bookSubHeading = 'GET THE SIGNATURE EDITION';
            $content->bookImage = "\img/content/book-cover-1-hardback.jpg";
            $content->bookIntro = 'THE FIRST NOVEL IN THE <br> RAGING DESTINY <br> SERIES JUST GOT BETTER!';
            $content->bookText = "<ul>
                                                    <li>- Hard Back cover.</li>
                                                    <li>- Dust sheet.</li>
                                                    <li>- Silver foil front cover.</li>
                                                    <li>- Larger A5 Print.</li>
                                                    <li>- Crisp White 80g pages.</li>
                                                    <li>- Larger margin indent.</li>
                                                    <li>- Signed by Author Billy Twigg</li>
                                                </ul>";
            $content->bookButtonText = '';

            $signatureEditionButton = new \stdClass();
            $signatureEditionButton->text = 'Buy Now';
            $signatureEditionButton->type = "signature";
            $content->bookButtons[] = $signatureEditionButton;
        }

        return $content;
    }
}
