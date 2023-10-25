<?php

        /**
         * @TODO: DOCTORDOGG DID IT
         */
        if(true) {
            try {
                $objectManager = $this->_objectManager;

                $orderId = 5;
                /**
                 * @var \Magento\Sales\Model\OrderRepository $orderRepository
                 */
                $orderRepository = $objectManager->create(\Magento\Sales\Model\OrderRepository::class);
                $order = $orderRepository->get($orderId);

                /**
                 * @var \Magento\Quote\Model\QuoteRepository $quoteRepository
                 */
                $quoteRepository = $objectManager->create(\Magento\Quote\Model\QuoteRepository::class);
                $quote = $quoteRepository->get($order->getQuoteId());

                /**
                 * @var \Magento\Framework\Event\ManagerInterface $eventManager
                 */
                $eventManager = $objectManager->create(\Magento\Framework\Event\ManagerInterface::class);

                $eventManager->dispatch(
                    'sales_model_service_quote_submit_success',
                    [
                        'order' => $order,
                        'quote' => $quote
                    ]
                );

            } catch (\Throwable $throwable) {
                $a = 10;
            }
            throw new \Exception('REMOVE LOCAL DEBUG');
        }
